<?php

namespace srag\Notifications4Plugin\HelpMe\Ctrl;

use ilConfirmationGUI;
use ilUtil;
use srag\DIC\HelpMe\DICTrait;
use srag\Notifications4Plugin\HelpMe\Notification\AbstractNotification;
use srag\Notifications4Plugin\HelpMe\Notification\Language\Repository as NotificationLanguageRepository;
use srag\Notifications4Plugin\HelpMe\Notification\Repository as NotificationRepository;
use srag\Notifications4Plugin\HelpMe\UI\NotificationFormGUI;
use srag\Notifications4Plugin\HelpMe\UI\NotificationsTableGUI;
use srag\Notifications4Plugin\HelpMe\Utils\Notifications4PluginTrait;

/**
 * Class AbstractCtrl
 *
 * @package srag\Notifications4Plugin\HelpMe\Ctrl
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  Stefan Wanzenried <sw@studer-raimann.ch>
 */
abstract class AbstractCtrl {

	use DICTrait;
	use Notifications4PluginTrait;
	const TAB_NOTIFICATIONS = "notifications";
	const LANG_MODULE_NOTIFICATIONS4PLUGIN = "notifications4plugin";
	const NAME = "Notifications4Plugin";
	const CMD_ADD_NOTIFICATION = "addNotification";
	const CMD_APPLY_FILTER = "applyFilter";
	const CMD_CREATE_NOTIFICATION = "createNotification";
	const CMD_DELETE_NOTIFICATION = "deleteNotification";
	const CMD_DELETE_NOTIFICATION_CONFIRM = "deleteNotificationConfirm";
	const CMD_DUPLICATE_NOTIFICATION = "duplicateNotification";
	const CMD_EDIT_NOTIFICATION = "editNotification";
	const CMD_LIST_NOTIFICATIONS = "listNotifications";
	const CMD_RESET_FILTER = "resetFilter";
	const CMD_UPDATE_NOTIFICATION = "updateNotification";
	const GET_PARAM = "notification_id";
	/**
	 * @var string
	 *
	 * @abstract
	 */
	const NOTIFICATION_CLASS_NAME = "";
	/**
	 * @var string
	 *
	 * @abstract
	 */
	const LANGUAGE_CLASS_NAME = "";


	/**
	 * @inheritdoc
	 */
	protected static function notification(): NotificationRepository {
		return NotificationRepository::getInstance(static::NOTIFICATION_CLASS_NAME, static::LANGUAGE_CLASS_NAME);
	}


	/**
	 * @inheritdoc
	 */
	protected static function notificationLanguage(): NotificationLanguageRepository {
		return NotificationLanguageRepository::getInstance(static::LANGUAGE_CLASS_NAME);
	}


	/**
	 * AbstractCtrl constructor
	 */
	public function __construct() {

	}


	/**
	 *
	 */
	public function executeCommand()/*: void*/ {
		$cmd = self::dic()->ctrl()->getCmd();

		switch ($cmd) {
			case self::CMD_ADD_NOTIFICATION:
			case self::CMD_APPLY_FILTER:
			case self::CMD_CREATE_NOTIFICATION:
			case self::CMD_DELETE_NOTIFICATION:
			case self::CMD_DELETE_NOTIFICATION_CONFIRM:
			case self::CMD_DUPLICATE_NOTIFICATION:
			case self::CMD_EDIT_NOTIFICATION:
			case self::CMD_LIST_NOTIFICATIONS:
			case self::CMD_RESET_FILTER:
			case self::CMD_UPDATE_NOTIFICATION:
				$this->{$cmd}();
				break;

			default:
				break;
		}
	}


	/**
	 *
	 */
	protected function listNotifications()/*: void*/ {
		$table = $this->getNotificationsTable();

		self::output()->output($table);
	}


	/**
	 *
	 */
	protected function applyFilter()/*: void*/ {
		$table = $this->getNotificationsTable(self::CMD_APPLY_FILTER);

		$table->writeFilterToSession();

		$table->resetOffset();

		//$this->redirect(self::CMD_LIST_NOTIFICATIONS);
		$this->listNotifications(); // Fix reset offset
	}


	/**
	 *
	 */
	protected function resetFilter()/*: void*/ {
		$table = $this->getNotificationsTable(self::CMD_RESET_FILTER);

		$table->resetOffset();

		$table->resetFilter();

		//$this->redirect(self::CMD_LIST_NOTIFICATIONS);
		$this->listNotifications(); // Fix reset offset
	}


	/**
	 *
	 */
	public function addNotification()/*: void*/ {
		$notification = self::notification()->factory()->newInstance();

		$form = $this->getNotificationForm($notification);

		self::output()->output($form);
	}


	/**
	 *
	 */
	public function createNotification()/*: void*/ {
		$notification = self::notification()->factory()->newInstance();

		$form = $this->getNotificationForm($notification);

		if (!$form->storeForm()) {
			self::output()->output($form);

			return;
		}

		self::notification()->storeInstance($form->getObject());

		ilUtil::sendSuccess(self::plugin()->translate("added_notification", self::LANG_MODULE_NOTIFICATIONS4PLUGIN, [
			$form->getObject()->getTitle()
		]), true);

		$this->redirect(self::CMD_LIST_NOTIFICATIONS);
	}


	/**
	 *
	 */
	public function editNotification()/*: void*/ {
		$notification = $this->getNotification();

		$form = $this->getNotificationForm($notification);

		self::output()->output($form);
	}


	/**
	 *
	 */
	public function updateNotification()/*: void*/ {
		$notification = $this->getNotification();

		$form = $this->getNotificationForm($notification);

		if (!$form->storeForm()) {
			self::output()->output($form);

			return;
		}

		self::notification()->storeInstance($form->getObject());

		ilUtil::sendSuccess(self::plugin()->translate("saved_notification", self::LANG_MODULE_NOTIFICATIONS4PLUGIN, [
			$form->getObject()->getTitle()
		]), true);

		$this->redirect(self::CMD_LIST_NOTIFICATIONS);
	}


	/**
	 *
	 */
	public function duplicateNotification()/*: void*/ {
		$notification = $this->getNotification();

		$cloned_notification = self::notification()->duplicateNotification($notification, self::plugin());

		self::notification()->storeInstance($cloned_notification);

		ilUtil::sendSuccess(self::plugin()
			->translate("duplicated_notification", self::LANG_MODULE_NOTIFICATIONS4PLUGIN, [ $notification->getTitle() ]), true);

		$this->redirect(self::CMD_LIST_NOTIFICATIONS);
	}


	/**
	 *
	 */
	public function deleteNotificationConfirm()/*: void*/ {
		$notification = $this->getNotification();

		$confirmation = $this->getNotificationDeleteConfirmation($notification);

		self::output()->output($confirmation);
	}


	/**
	 *
	 */
	public function deleteNotification()/*: void*/ {
		$notification = $this->getNotification();

		self::notification()->deleteNotification($notification);

		ilUtil::sendSuccess(self::plugin()
			->translate("deleted_notification", self::LANG_MODULE_NOTIFICATIONS4PLUGIN, [ $notification->getTitle() ]), true);

		$this->redirect(self::CMD_LIST_NOTIFICATIONS);
	}


	/**
	 * @param string $parent_cmd
	 *
	 * @return NotificationsTableGUI
	 */
	protected function getNotificationsTable(string $parent_cmd = self::CMD_LIST_NOTIFICATIONS): NotificationsTableGUI {
		return self::notificationUI()->withPlugin(self::plugin())->notificationTable($this, $parent_cmd, function () {
			return self::notification()->getArrayForTable($this->getNotifications());
		});
	}


	/**
	 * @param AbstractNotification $notification
	 *
	 * @return NotificationFormGUI
	 */
	protected function getNotificationForm(AbstractNotification $notification): NotificationFormGUI {
		return self::notificationUI()->withPlugin(self::plugin())->notificationForm($this, $notification);
	}


	/**
	 * @param AbstractNotification $notification
	 *
	 * @return ilConfirmationGUI
	 */
	protected function getNotificationDeleteConfirmation(AbstractNotification $notification): ilConfirmationGUI {
		return self::notificationUI()->withPlugin(self::plugin())->notificationDeleteConfirmation($this, $notification);
	}


	/**
	 * @return array
	 */
	protected function getNotifications(): array {
		return self::notification()->getNotifications();
	}


	/**
	 * @return AbstractNotification
	 */
	protected function getNotification(): AbstractNotification {
		$notification_id = intval(filter_input(INPUT_GET, self::GET_PARAM));

		return self::notification()->getNotificationById($notification_id);
	}


	/**
	 * @param string $cmd
	 */
	protected function redirect(string $cmd)/*: void*/ {
		self::dic()->ctrl()->redirect($this, $cmd);
	}
}
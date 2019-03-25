<?php

namespace srag\Plugins\HelpMe\Recipient;

use ilMimeMail;
use PHPMailer\PHPMailer\Exception as phpmailerException;
use srag\ActiveRecordConfig\HelpMe\Exception\ActiveRecordConfigException;
use srag\DIC\HelpMe\Exception\DICException;
use srag\HelpMe\Exception\HelpMeException;
use srag\Notifications4Plugins\Exception\Notifications4PluginsException;
use srag\Plugins\HelpMe\Config\Config;
use srag\Plugins\HelpMe\Support\Support;

/**
 * Class RecipientSendMail
 *
 * @package srag\Plugins\HelpMe\Recipient
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class RecipientSendMail extends Recipient {

	/**
	 * RecipientSendMail constructor
	 *
	 * @param Support $support
	 */
	public function __construct(Support $support) {
		parent::__construct($support);
	}


	/**
	 * @inheritdoc
	 */
	public function sendSupportToRecipient()/*: void*/ {
		$this->sendEmail();

		$this->sendConfirmationMail();
	}


	/**
	 * Send support email
	 *
	 * @throws ActiveRecordConfigException
	 * @throws DICException
	 * @throws HelpMeException
	 * @throws Notifications4PluginsException
	 * @throws phpmailerException
	 */
	protected function sendEmail()/*: void*/ {
		$mailer = new ilMimeMail();

		$mailer->From(new RecipientSendMailSender($this->support));

		$mailer->To(Config::getField(Config::KEY_SEND_EMAIL_ADDRESS));

		$mailer->Subject($this->getSubject(self::SEND_EMAIL));

		$mailer->Body($this->getBody(self::SEND_EMAIL));

		foreach ($this->support->getScreenshots() as $screenshot) {
			$mailer->Attach($screenshot->getPath(), $screenshot->getMimeType(), "attachment", $screenshot->getName());
		}

		$sent = $mailer->Send();

		if (!$sent) {
			throw new HelpMeException("Mailer not returns true");
		}
	}
}

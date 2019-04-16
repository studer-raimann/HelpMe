<?php

namespace srag\Plugins\HelpMe\Ticket;

use ilCronManager;
use ilHelpMeConfigGUI;
use ilHelpMeCronPlugin;
use ilHelpMePlugin;
use ilUtil;
use srag\DIC\HelpMe\DICStatic;
use srag\DIC\HelpMe\DICTrait;
use srag\Plugins\HelpMe\Config\Config;
use srag\Plugins\HelpMe\Job\FetchJiraTicketsJob;
use srag\Plugins\HelpMe\Recipient\Recipient;
use srag\Plugins\HelpMe\Utils\HelpMeTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\HelpMe\Ticket
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository {

	use DICTrait;
	use HelpMeTrait;
	const PLUGIN_CLASS_NAME = ilHelpMePlugin::class;
	/**
	 * @var self
	 */
	protected static $instance = null;


	/**
	 * @return self
	 */
	public static function getInstance(): self {
		if (self::$instance === null) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * Repository constructor
	 */
	private function __construct() {

	}


	/**
	 * @return Factory
	 */
	public function factory(): Factory {
		return Factory::getInstance();
	}


	/**
	 * @return array
	 */
	public function getAvailableIssueTypes(): array {
		$result = self::dic()->database()->query('SELECT DISTINCT ticket_issue_type FROM ' . Ticket::TABLE_NAME . ' ORDER BY ticket_issue_type ASC');

		$issue_types = [];

		while (($issue_type = $result->fetchAssoc()) !== false) {
			$issue_types[$issue_type["ticket_issue_type"]] = $issue_type["ticket_issue_type"];
		}

		return $issue_types;
	}


	/**
	 * @return array
	 */
	public function getAvailablePriorities(): array {
		$result = self::dic()->database()->query('SELECT DISTINCT ticket_priority FROM ' . Ticket::TABLE_NAME . ' ORDER BY ticket_priority ASC');

		$priorities = [];

		while (($issue_type = $result->fetchAssoc()) !== false) {
			$priorities[$issue_type["ticket_priority"]] = $issue_type["ticket_priority"];
		}

		return $priorities;
	}


	/**
	 * @param string $project_url_key
	 *
	 * @return string
	 */
	public function getLink(string $project_url_key = ""): string {
		return self::supports()->getLink("tickets" . (!empty($project_url_key) ? "_" . $project_url_key : ""));
	}


	/**
	 * @param int $ticket_id
	 *
	 * @return Ticket|null
	 */
	public function getTicketById(int $ticket_id)/*: ?Ticket*/ {
		/**
		 * @var Ticket|null $ticket
		 */

		$ticket = Ticket::where([ "ticket_id" => $ticket_id ])->first();

		return $ticket;
	}


	/**
	 * @param string $ticket_key
	 *
	 * @return Ticket|null
	 */
	public function getTicketByKey(string $ticket_key)/*: ?Ticket*/ {
		/**
		 * @var Ticket|null $ticket
		 */

		$ticket = Ticket::where([ "ticket_key" => $ticket_key ])->first();

		return $ticket;
	}


	/**
	 * @param array       $fields
	 * @param string|null $sort_by
	 * @param string|null $sort_by_direction
	 * @param int|null    $limit_start
	 * @param int|null    $limit_end
	 * @param string      $ticket_title
	 * @param string      $ticket_project_url_key
	 * @param string      $ticket_issue_type
	 * @param string      $ticket_priority
	 *
	 * @return array
	 */
	public function getTickets(array $fields = [], string $sort_by = null, string $sort_by_direction = null, int $limit_start = null, int $limit_end = null, string $ticket_title = "", string $ticket_project_url_key = "", string $ticket_issue_type = "", string $ticket_priority = ""): array {

		if (!in_array("ticket_id", $fields)) {
			array_unshift($fields, "ticket_id");
		}
		if (!in_array("ticket_project_url_key", $fields)) {
			array_unshift($fields, "ticket_project_url_key");
		}

		$sql = 'SELECT ' . implode(",", array_map(function (string $field): string {
				return self::dic()->database()->quoteIdentifier($field);
			}, $fields));

		$sql .= $this->getTicketsQuery($sort_by, $sort_by_direction, $limit_start, $limit_end, $ticket_title, $ticket_project_url_key, $ticket_issue_type, $ticket_priority);

		$result = self::dic()->database()->query($sql);

		$tickets = [];

		while (($row = $result->fetchAssoc()) !== false) {
			$row["ticket_project"] = self::projects()->getProjectByUrlKey($row["ticket_project_url_key"]);

			$tickets[$row["ticket_id"]] = $row;
		}

		return $tickets;
	}


	/**
	 * @param string $ticket_title
	 * @param string $ticket_project_url_key
	 * @param string $ticket_issue_type
	 * @param string $ticket_priority
	 *
	 * @return int
	 */
	public function getTicketsCount(string $ticket_title = "", string $ticket_project_url_key = "", string $ticket_issue_type = "", string $ticket_priority = ""): int {

		$sql = 'SELECT COUNT(ticket_id) AS count';

		$sql .= $this->getTicketsQuery(null, null, null, null, $ticket_title, $ticket_project_url_key, $ticket_issue_type, $ticket_priority);

		$result = self::dic()->database()->query($sql);

		if (($row = $result->fetchAssoc()) !== false) {
			return intval($row["count"]);
		}

		return 0;
	}


	/**
	 * @param string|null $sort_by
	 * @param string|null $sort_by_direction
	 * @param int|null    $limit_start
	 * @param int|null    $limit_end
	 * @param string      $ticket_title
	 * @param string      $ticket_project_url_key
	 * @param string      $ticket_issue_type
	 * @param string      $ticket_priority
	 *
	 * @return string
	 */
	private function getTicketsQuery(string $sort_by = null, string $sort_by_direction = null, int $limit_start = null, int $limit_end = null, string $ticket_title = "", string $ticket_project_url_key = "", string $ticket_issue_type = "", string $ticket_priority = ""): string {

		$sql = ' FROM ' . Ticket::TABLE_NAME;

		$wheres = [];

		if (!empty($ticket_title)) {
			$wheres[] = self::dic()->database()->like("ticket_title", "text", '%' . $ticket_title . '%');
		}

		if (!empty($ticket_project_url_key)) {
			$wheres[] = 'ticket_project_url_key=' . self::dic()->database()->quote($ticket_project_url_key, "text");
		}

		if (!empty($ticket_issue_type)) {
			$wheres[] = 'ticket_issue_type=' . self::dic()->database()->quote($ticket_issue_type, "text");
		}

		if (!empty($ticket_priority)) {
			$wheres[] = 'ticket_priority=' . self::dic()->database()->quote($ticket_priority, "text");
		}

		if (count($wheres) > 0) {
			$sql .= ' WHERE ' . implode(" AND ", $wheres);
		}

		if ($sort_by !== null && $sort_by_direction !== null) {
			$sql .= ' ORDER BY ' . self::dic()->database()->quoteIdentifier($sort_by) . ' ' . $sort_by_direction;
		}

		if ($limit_start !== null && $limit_end !== null) {
			$sql .= ' LIMIT ' . self::dic()->database()->quote($limit_start, "integer") . ',' . self::dic()->database()->quote($limit_end, "integer");
		}

		return $sql;
	}


	/**
	 * @param bool $check_has_one_project_at_least_read_access
	 *
	 * @return bool
	 */
	public function isEnabled(bool $check_has_one_project_at_least_read_access = true): bool {
		return (Config::getField(Config::KEY_RECIPIENT) === Recipient::CREATE_JIRA_TICKET
			&& (!$check_has_one_project_at_least_read_access || self::projects()->hasOneProjectAtLeastReadAccess())
			&& file_exists(__DIR__ . "/../../../../../Cron/CronHook/HelpMeCron/vendor/autoload.php")
			&& DICStatic::plugin(ilHelpMeCronPlugin::class)->getPluginObject()->isActive()
			&& ilCronManager::isJobActive(FetchJiraTicketsJob::CRON_JOB_ID));
	}


	/**
	 *
	 */
	public function removeTickets()/*: void*/ {
		Ticket::truncateDB();
	}


	/**
	 * @param Ticket[] $tickets
	 */
	public function replaceWith(array $tickets)/*: void*/ {
		$this->removeTickets();

		foreach ($tickets as $ticket) {
			$this->storeInstance($ticket);
		}
	}


	/**
	 *
	 */
	public function showUsageConfigHint()/*: void*/ {
		if (Config::getField(Config::KEY_RECIPIENT) === Recipient::CREATE_JIRA_TICKET) {
			if (!$this->isEnabled(false)) {
				ilUtil::sendInfo(self::plugin()->translate("usage_1_info", ilHelpMeConfigGUI::LANG_MODULE_CONFIG));
			} else {
				if (!$this->isEnabled()) {
					ilUtil::sendInfo(self::plugin()->translate("usage_2_info", ilHelpMeConfigGUI::LANG_MODULE_CONFIG));
				}
			}
		}
	}


	/**
	 * @param Ticket $ticket
	 */
	public function storeInstance(Ticket $ticket)/*: void*/ {
		$ticket->store();
	}
}
<?php

namespace srag\Plugins\HelpMe\Ticket;

require_once __DIR__ . "/../../vendor/autoload.php";

use ilHelpMePlugin;
use srag\DIC\HelpMe\DICTrait;
use srag\Plugins\HelpMe\Utils\HelpMeTrait;

/**
 * Class TicketsGUI
 *
 * @package           srag\Plugins\HelpMe\Ticket
 *
 * @ilCtrl_isCalledBy srag\Plugins\HelpMe\Ticket\TicketsGUI: ilUIPluginRouterGUI
 */
class TicketsGUI
{

    use DICTrait;
    use HelpMeTrait;

    const CMD_APPLY_FILTER = "applyFilter";
    const CMD_LIST_TICKETS = "listTickets";
    const CMD_RESET_FILTER = "resetFilter";
    const CMD_SET_PROJECT_FILTER = "setProjectFilter";
    const GET_PARAM_USAGE_ID = "usage_id";
    const LANG_MODULE = "tickets";
    const PLUGIN_CLASS_NAME = ilHelpMePlugin::class;


    /**
     * TicketsGUI constructor
     */
    public function __construct()
    {

    }


    /**
     *
     */
    public function executeCommand() : void
    {
        if (!self::helpMe()->currentUserHasRole() || !self::helpMe()->tickets()->isEnabled()) {
            die();
        }

        $this->setTabs();

        $next_class = self::dic()->ctrl()->getNextClass($this);

        switch (strtolower($next_class)) {
            default:
                $cmd = self::dic()->ctrl()->getCmd();

                switch ($cmd) {
                    case self::CMD_APPLY_FILTER:
                    case self::CMD_LIST_TICKETS:
                    case self::CMD_RESET_FILTER:
                    case self::CMD_SET_PROJECT_FILTER:
                        $this->{$cmd}();
                        break;

                    default:
                        break;
                }
                break;
        }
    }


    /**
     *
     */
    protected function applyFilter() : void
    {
        $table = self::helpMe()->tickets()->factory()->newTableInstance($this, self::CMD_APPLY_FILTER);

        $table->writeFilterToSession();

        $table->resetOffset();

        //self::dic()->ctrl()->redirect($this, self::CMD_LIST_TICKETS);
        $this->listTickets(); // Fix reset offset
    }


    /**
     *
     */
    protected function listTickets() : void
    {
        $table = self::helpMe()->tickets()->factory()->newTableInstance($this);

        self::output()->output($table, true);
    }


    /**
     *
     */
    protected function resetFilter() : void
    {
        $table = self::helpMe()->tickets()->factory()->newTableInstance($this, self::CMD_RESET_FILTER);

        $table->resetFilter();

        $table->resetOffset();

        //self::dic()->ctrl()->redirect($this, self::CMD_LIST_TICKETS);
        $this->listTickets(); // Fix reset offset
    }


    /**
     *
     */
    protected function setProjectFilter() : void
    {
        $project_url_key = filter_input(INPUT_GET, "project_url_key");

        $table = self::helpMe()->tickets()->factory()->newTableInstance($this, self::CMD_RESET_FILTER);
        $table->resetFilter();
        $table->resetOffset();

        $_POST["ticket_project_url_key"] = $project_url_key;
        $this->applyFilter();
    }


    /**
     *
     */
    protected function setTabs() : void
    {

    }
}

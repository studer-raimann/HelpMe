<?php

namespace srag\Plugins\HelpMe\Job;

use ilCronJob;
use ilHelpMePlugin;
use srag\DIC\HelpMe\DICTrait;
use srag\Plugins\HelpMe\Ticket\FetchJiraTicketsJob;
use srag\Plugins\HelpMe\Utils\HelpMeTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\HelpMe\Job
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory
{

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
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return ilCronJob[]
     */
    public function newInstances() : array
    {
        return [
            self::helpMe()->tickets()->factory()->newFetchJiraTicketsJobInstance()
        ];
    }


    /**
     * @param string $job_id
     *
     * @return ilCronJob|null
     */
    public function newInstanceById(string $job_id)/*: ?ilCronJob*/
    {
        switch ($job_id) {
            case FetchJiraTicketsJob::CRON_JOB_ID:
                return self::helpMe()->tickets()->factory()->newFetchJiraTicketsJobInstance();

            default:
                return null;
        }
    }
}

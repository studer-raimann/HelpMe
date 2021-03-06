<?php

namespace srag\Plugins\HelpMe\RequiredData\Field\CreatedDateTime;

use ilDatePresentation;
use ilDateTime;
use ilHelpMePlugin;
use srag\Plugins\HelpMe\Support\SupportGUI;
use srag\Plugins\HelpMe\Utils\HelpMeTrait;
use srag\RequiredData\HelpMe\Field\Field\DynamicValue\DynamicValueField;

/**
 * Class CreatedDateTimeField
 *
 * @package srag\Plugins\HelpMe\RequiredData\Field\CreatedDateTime
 */
class CreatedDateTimeField extends DynamicValueField
{

    use HelpMeTrait;

    const PLUGIN_CLASS_NAME = ilHelpMePlugin::class;
    const TABLE_NAME_SUFFIX = "dati";


    /**
     * @inheritDoc
     */
    public static function canBeAddedOnlyOnce() : bool
    {
        return true;
    }


    /**
     * @inheritDoc
     */
    public function deliverDynamicValue() : string
    {
        // Save and restore old existing useRelativeDates
        $useRelativeDates_ = ilDatePresentation::useRelativeDates();

        ilDatePresentation::setUseRelativeDates(false);

        $formated_time = ilDatePresentation::formatDate(new ilDateTime(time(), IL_CAL_UNIX));

        // Save and restore old existing useRelativeDates
        ilDatePresentation::setUseRelativeDates($useRelativeDates_);

        return $formated_time;
    }


    /**
     * @inheritDoc
     */
    public function getTypeTitle() : string
    {
        return self::plugin()->translate("createddatetime", SupportGUI::LANG_MODULE);
    }


    /**
     * @inheritDoc
     */
    protected function getInitHide() : bool
    {
        return true;
    }
}

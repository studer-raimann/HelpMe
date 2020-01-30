<?php

namespace srag\RequiredData\HelpMe\Field\SearchSelect;

use srag\RequiredData\HelpMe\Field\FieldCtrl;
use srag\RequiredData\HelpMe\Field\MultiSearchSelect\MultiSearchSelectFieldFormGUI;

/**
 * Class SearchSelectFieldFormGUI
 *
 * @package srag\RequiredData\HelpMe\Field\SearchSelect
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class SearchSelectFieldFormGUI extends MultiSearchSelectFieldFormGUI
{

    /**
     * @var SearchSelectField
     */
    protected $object;


    /**
     * @inheritDoc
     */
    public function __construct(FieldCtrl $parent, SearchSelectField $object)
    {
        parent::__construct($parent, $object);
    }
}
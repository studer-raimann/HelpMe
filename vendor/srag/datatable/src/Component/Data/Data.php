<?php

namespace srag\DataTableUI\HelpMe\Component\Data;

use srag\DataTableUI\HelpMe\Component\Data\Row\RowData;

/**
 * Interface Data
 *
 * @package srag\DataTableUI\HelpMe\Component\Data
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface Data
{

    /**
     * @return RowData[]
     */
    public function getData() : array;


    /**
     * @param RowData[] $data
     *
     * @return self
     */
    public function withData(array $data) : self;


    /**
     * @return int
     */
    public function getMaxCount() : int;


    /**
     * @param int $max_count
     *
     * @return self
     */
    public function withMaxCount(int $max_count) : self;


    /**
     * @return int
     */
    public function getDataCount() : int;
}

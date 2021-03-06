<?php

namespace srag\DataTableUI\SrFileObjectTypeIcons\Implementation\Data\Fetcher;

use srag\DataTableUI\SrFileObjectTypeIcons\Component\Data\Fetcher\DataFetcher;
use srag\DataTableUI\SrFileObjectTypeIcons\Component\Table;
use srag\DataTableUI\SrFileObjectTypeIcons\Implementation\Utils\DataTableUITrait;
use srag\DIC\SrFileObjectTypeIcons\DICTrait;

/**
 * Class AbstractDataFetcher
 *
 * @package srag\DataTableUI\SrFileObjectTypeIcons\Implementation\Data\Fetcher
 */
abstract class AbstractDataFetcher implements DataFetcher
{

    use DICTrait;
    use DataTableUITrait;

    /**
     * AbstractDataFetcher constructor
     */
    public function __construct()
    {

    }


    /**
     * @inheritDoc
     */
    public function getNoDataText(Table $component) : string
    {
        return $component->getPlugin()->translate("no_data", Table::LANG_MODULE);
    }


    /**
     * @inheritDoc
     */
    public function isFetchDataNeedsFilterFirstSet() : bool
    {
        return false;
    }
}

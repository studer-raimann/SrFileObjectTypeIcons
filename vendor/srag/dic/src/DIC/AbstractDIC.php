<?php

namespace srag\DIC\SrFileObjectTypeIcons\DIC;

use ILIAS\DI\Container;
use srag\DIC\SrFileObjectTypeIcons\Database\DatabaseDetector;
use srag\DIC\SrFileObjectTypeIcons\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\SrFileObjectTypeIcons\DIC
 */
abstract class AbstractDIC implements DICInterface
{

    /**
     * @var Container
     */
    protected $dic;


    /**
     * @inheritDoc
     */
    public function __construct(Container &$dic)
    {
        $this->dic = &$dic;
    }


    /**
     * @inheritDoc
     */
    public function database() : DatabaseInterface
    {
        return DatabaseDetector::getInstance($this->databaseCore());
    }
}

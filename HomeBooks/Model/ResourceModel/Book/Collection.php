<?php

namespace Alevel\HomeBooks\Model\ResourceModel\Book;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Alevel\HomeBooks\Model\ResourceModel\Book
 */
class Collection extends AbstractCollection
{
    /**
     * Define model and resource model.
     */
    protected function _construct()
    {
        $this->_init(
            \Alevel\HomeBooks\Model\Book::class,
            \Alevel\HomeBooks\Model\ResourceModel\Book::class
        );
    }
}
<?php

namespace Alevel\HomeBooks\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Post
 * @package Alevel\HomeBooks\Model\ResourceModel
 */
class Book extends AbstractDb
{
    /**
     * If no auto increment need set false , for save entity.
     *
     * Primary key auto increment flag
     *
     * @var bool
     */
    //protected $_isPkAutoIncrement = true;


    /**
     * _construct for init.
     *
     * Initialize table and id field name.
     */
    protected function _construct()
    {
        $this->_init('alevel_books_model', 'entity_id');
    }
}
<?php

namespace Alevel\HomeBooks\Model;

use Magento\Framework\Model\AbstractModel;
use Alevel\HomeBooks\Api\Data\BookInterface;

use Alevel\HomeBooks\Model\ResourceModel\Book as ResourceModel;

/**
 * Class Book
 * @package Alevel\HomeBooks\Model
 */
class Book extends AbstractModel implements BookInterface
{

    /**
     *  Init resource model.
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return mixed|string
     */
    public function getTitle()
    {
        return $this->getData(BookInterface::TITLE);
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->getData(BookInterface::AUTHOR);
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->getData(BookInterface::GENRE);
    }
}
<?php

namespace Alevel\HomeBooks\Api\Data;

/**
 * Interface PostInterface
 * @package Alevel\HomeBooks\Api\Data
 */
interface BookInterface
{
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';
    const AUTHOR = 'author';
    const GENRE = 'genre';


    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @return string
     */
    public function getGenre();

}
<?php

namespace project\Entity;

/**
 * Our post
 */
class Post extends Entity
{
    protected $title;
    protected $text;
    /**
     * Get
     *
     * @return string
     */
    public function getTitle() 
    {
        return $this->title;
    }
    /**
     * Set
     *
     * @param type $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * Get
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

<?php

class BlogPost extends PropertyContainer
{
    private $title;
    private $category_id;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category_id;
    }

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category_id = $category;
    }
}

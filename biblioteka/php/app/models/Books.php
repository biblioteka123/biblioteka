<?php

class Books extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $book_id;

    /**
     *
     * @var integer
     */
    public $book_category_id;

    /**
     *
     * @var string
     */
    public $book_title;

    /**
     *
     * @var string
     */
    public $book_author;

    /**
     *
     * @var string
     */
    public $book_year;

    /**
     *
     * @var string
     */
    public $book_description;

    /**
     *
     * @var string
     */
    public $book_link;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'book_id' => 'book_id', 
            'book_category_id' => 'book_category_id', 
            'book_title' => 'book_title', 
            'book_author' => 'book_author', 
            'book_year' => 'book_year', 
            'book_description' => 'book_description',
            'book_link' => 'book_link'
        );
    }


    /**
     * Short Description.
     */
    public function getShortDescription()
    {
        if(strlen($this->book_description)>40)
            return  substr($this->book_description,0,40).'...';
        else
            return $this->book_description;
    }

}

<?php
namespace Storage\DesignPatterns\Template;

/**
 * Template design pattern
 * Extended in PaperBack.php
 * Extended in Ebook.php
 */

abstract class Book
{
    protected $title;
    protected $content;

    public function setTitle($str)
    {
        $this->title = $str;
    }

    public function setContent($str)
    {
        $this->content = $str;
    }
}

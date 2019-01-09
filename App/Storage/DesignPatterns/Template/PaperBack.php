<?php
namespace Storage\DesignPatterns\Template;

class PaperBack extends Book
{
    public function printBook()
    {
        return "The book <h2> $this->title was printed </h2>".'<br>'.
        $this->content;
    }
}

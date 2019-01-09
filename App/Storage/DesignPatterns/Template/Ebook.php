<?php
namespace Storage\DesignPatterns\Template;

/**
 * Ebook class
 */
class Ebook extends Book
{
    public function generatePdf()
    {
        return "<h2>A pdf version was printed for $this->title</h2>";
    }
}

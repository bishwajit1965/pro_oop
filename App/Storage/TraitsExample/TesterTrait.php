<?php
namespace Storage\TraitsExample;

/**
 * Trait loader
 */

include_once 'reader.php';
include_once 'writer.php';


/**
 * Using traits
 */
class TesterTrait
{
    /**
     * Traits included
     */
    use Reader;
    use Writer;
    public function calculate($var1, $var2)
    {
        echo "Ressult of addition:".$this->add($var1, $var2) ."<br>";
        echo "Ressult of multiplication:".$this->multiplication($var1, $var2);
    }
}

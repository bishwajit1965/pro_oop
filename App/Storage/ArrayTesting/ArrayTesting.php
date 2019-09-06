<?php
namespace Storage\ArrayTesting;

class ArrayTesting
{
    public function __construct()
    {
        /**=============================================
        | Indexed arrays
        |=============================================**/
        echo '<h1>Indexed arrays:</h1>';
        echo '<h4>The result of implode() = </h4>';

        $animals = ['dog', 'cat', 'cow', 'monkey', 'tiger', 'deer'
        ];

        $data = implode(', ', $animals);
        echo  $data;

        echo '<h4>The result of current() = </h4>' . current($animals);
        echo '<br>';

        echo '<h4>The result of next() = </h4>' . next($animals);
        echo '<br>';

        $explodeDataString = 'Hello Bangladesh. I love you very much.';
        echo '<pre>', print_r(explode(' ', $explodeDataString)),'</pre>';

        $dataString = 'one,two,three,four,five';
        // zero limit
        echo '<pre>', print_r(explode(',', $dataString, 0)),'</pre>';
        print "<br>";


        echo '<pre>',print_r($animals),'</pre>';
        echo '<pre>',print_r(array_reverse($animals)),'</pre>';

        $num = count($animals);
        echo 'The number of array items = ' .$num.'<br>';
        echo 'The animals are ';
        $serial =0;
        foreach ($animals as $animal) {
            echo  '('.$serial++.') '.$animal . ' , ';
        }
        echo '<br>';

        echo '<h4>The result of array_count_values() = </h4>';

        $animals = ['dog', 'dog','dog','dog','cat','cat', 'cow', 'monkey','monkey', 'tiger', 'deer', 'deer'];
        echo '<pre>',
        print_r(array_count_values($animals));
        echo '</pre>';
        /**=============================================
        | Associative arrays
        |=============================================**/
        echo '<h1>Associative arrays:</h1>';
        $i ='1';
        for ($i =1; $i < 80; $i++) {
            echo '<strong> - </strong>';
            $i++;
        }
        echo '<br>';

        echo '<h4>The result of array_key_exists(): </h4>';
        $components = ['pencil' => 'Ten taka', 'pen' =>'Fifty taka'];
        if (array_key_exists('pencil', $components)) {
            echo 'Array key "pencil" exists<br>';
        }

        $pets = [
            'Dog' => ' is a master loving pet animal.<br>',
            'Cat' => ' is a sleep loving pet animal.<br>',
            'Cow' => ' is a harbivorus milk producing pet animal.<br>',
            'Deer' => ' is a harbivorus wild animal.<br>',
        ];
        echo $pets['Dog'];
        echo '<br>';
        foreach ($pets as $key => $value) {
            echo $key ;
            echo $value;
        }
    }
}

<?php

class Beverage {
    public $name;

    function __construct() {
        echo "new neverage <br/>";
    }

    function __clone() {
        echo "existing beverage copied";
    }
}

$a = new Beverage;
$a->name = 'coffee';
echo $a->name . '<br/>';

$b = clone $a;
echo '<hr>';
echo $a->name . '<br/>';
echo $b->name . '<br/>';

$b->name = 'tea';

echo '<hr>';
echo $a->name . '<br/>';
echo $b->name . '<br/>';
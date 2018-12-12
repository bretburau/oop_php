<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name() {
        return $this->brand;
    }

    function weight_lbs() {
        return $this->weight_kg * 2.2046226218;
    }

    function set_weight_lbs($weight) {
        $this->weight_kg = $weight / 2.2046226218;
    }
}

$bike1 = new Bicycle;
$bike1->brand = 'Huffy';
$bike1->model = 'Slayer';
$bike1->year = '2015';
$bike1->description = 'Really neato';
$bike1->weight_kg = '25';

echo $bike1->brand . '<br />';
echo $bike1->model . '<br />';
echo $bike1->year . '<br />';
echo $bike1->description . '<br />';
echo $bike1->weight_kg . '<br />';
echo $bike1->weight_lbs() . '<br />';

$bike1->set_weight_lbs(50);
echo $bike1->weight_kg . '<br />';
echo $bike1->weight_lbs() . '<br />';
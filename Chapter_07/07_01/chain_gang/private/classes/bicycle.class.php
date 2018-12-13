<?php

class Bicycle {

    const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];
    const GENDERS = ['mens', 'womens', 'unisex'];
    public $conditions = ['Beat up', 'Decent', 'Good', 'Great', 'Like New'];
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price; 
    protected $weight_kg; 
    public $condition_id;  
    function __construct($args = []) {
        foreach($args as $key => $value) {
            $this->$key = $value;
        }
    }

    public function condition() {
        return $this->conditions[$this->condition_id - 1];
    }

    public function weight_kg() {
        return $this->weight_kg;
    }
    
    public function weight_lbs() {
        return $this->weight_kg * 2.20462;
    }

    public function set_weight_kg($val) {
        $this->weight_kg = $val;
    }

    public function set_weight_lbs($val) {
        $this->weight_kg = $val / 2.20462;
    }
}


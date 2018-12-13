<?php

class Bicycle {

    const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];
    const GENDERS = ['mens', 'womens', 'unisex'];
    protected const CONDITION_OPTIONS = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
      ];
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
        if($this->condition_id > 0) {
          return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
          return "Unknown";
        }
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


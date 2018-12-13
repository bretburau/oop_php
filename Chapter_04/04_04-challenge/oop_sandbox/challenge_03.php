<?php
class Bicycle {

    private $brand;
    private $model;
    private $year;
    private $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected $wheels = 4;
  
    public function name() {
      return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
  
    public function weight_lbs() {
      return floatval($this->weight_kg) * 2.2046226218;
    }
  
    public function set_weight_lbs($value) {
      $this->weight_kg = floatval($value) / 2.2046226218 . " lbs";
    }

    public function wheel_details() {
        return "It has $wheels wheels.";
    }
  
    public function set_weight_kg($value) {
        $this->$weight_kg = $value;
    }

    public function weight_kg() {
        return $this->weight_kg . "kg";
    }
  }

  class Unicycle extends Bicycle {
    protected $wheels = 2;
  }
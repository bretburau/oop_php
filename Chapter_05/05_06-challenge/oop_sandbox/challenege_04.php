<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  protected $weight_kg = 0.0;
  protected static $wheels = 2;
  public static $instance_count = 0;
  public const CATEGORIES = ['BMX', 'Cruiser'];
  public $category;

  public static function create() {
      self::$instance_count ++;
      return new self;
  }

  public function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public static function wheel_details() {
    $newWheels = static::$wheels;
    $wheel_string = $newWheels == 1 ? "1 wheel" : "{$newWheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return $weight_lbs . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

class Unicycle extends Bicycle {
  // visibility must match property being overridden
  protected static $wheels = 1;

  public function bug_test() {
    return $this->weight_kg;
  }
}

$bike = Bicycle::create();
echo Bicycle::$instance_count . '<br/>';
$uni = Unicycle::create();
echo Bicycle::$instance_count . '<br/>';
echo Bicycle::wheel_details();
echo Unicycle::wheel_details();
<?php

class Student {

  public $first_name;
  public $last_name;
  public $country = 'None';

  protected $registration_id;
  private $tution = 0.00;

  public function say_hello() {
    return 'Hello world!';
  }

  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

  public function hello_world() {
    return 'Hello world!';
  }

  protected function hello_family() {
    return 'Hello family!';
  }

  private function hello_me() {
    return 'Hello me!';
  }
}

class PartTimeStudent extends Student {
  public function hello_parent () {
    return $this->hello_family();
  }
}

$student1 = new PartTimeStudent;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';


echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";

echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

echo $student1->hello_world();
// echo $student1->hello_family();
// echo $student1->hello_me();
echo $student1->hello_parent();
?>

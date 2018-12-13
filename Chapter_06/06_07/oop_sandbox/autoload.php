<?php
function my_autoload($class) {
    if(preg_match('/\A\w+\z/', $class)) {
        include 'classes/' . $class . '.class.php';
    }
}
spl_autoload_register('my_autoload');

$bike = new Unicycle;
$bike->brand = 'Trek';
echo $bike->brand;
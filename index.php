<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
//$button->icon = 'book';
//$button->set(['primary' => true]);
$name = 2;
for ($number = 1; $number <= 9; $number++) {
  $button = $app->add(['Button',' '.$name]);
  if (($number %2)==1){
    $button->set(['primary' => true]);
  }
  $name = 2+$name;
}

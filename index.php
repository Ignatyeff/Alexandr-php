<?php
echo "Hello";
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initlayout('centered');
$button = $app->add(['Button','youtube.com']);
$button->link('https://www.youtube.com/');
$button->icon = 'book';
$button->set(['primary'=>true]);
$button = $app->add(['Button','Google.com']);
$button->link('https://www.google.com/');
$button->icon = 'book';
$button->set(['secondary'=>true]);

<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initlayout('centered');
$button=$app->add(['Button','youtube.com']);
$button->link('https://www.youtube.com/');
$button->icon='book';
$button->set(['primary'=>true]);

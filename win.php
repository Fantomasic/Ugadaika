<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Угадайка');
$app->initLayout('Centered');
$good= $_GET['good'];
$label = $app->add(['Label',$good,'massive green']);
$header = $app->add(['Header','Отлично!!!!!']);
$button4= $app->add (['Button','Начать заново']);
$button4->link(['index']);

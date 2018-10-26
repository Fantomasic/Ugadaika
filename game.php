<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Угадайка');
$app->initLayout('Centered');
$min=$_GET['min'];
$max=$_GET['max'];
$mid=floor(($min + $max)/2);
$text =$app->add(['Text', 'Это ваше число? '.$mid]);
$button= $app->add(['Button','Мое число меньше']);
$button->link(['game', 'min'=>$min,'max'=>$mid]);
$button2 =$app->add(['Button','Мое число больше']);
$button2->link(['game','min'=>$mid,'max'=>$max]);
$button3= $app->add (['Button','Правильно!']);
$button3->link(['win','good'=>$mid]);
$button4= $app->add (['Button','Начать заново']);
$button4->link(['index']);
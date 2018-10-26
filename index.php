<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Угадайка');
$app->initLayout('Centered');
$header = $app->add(['Header','Добро пожаловать в игру,нажмите чтобы начать!']);
$button = $app->add(['Button' , 'Начать игру!','big red']);
$button ->link(['game','min'=>1,'max'=>100]);
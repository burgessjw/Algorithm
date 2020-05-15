<?php
require(__DIR__ . '/vendor/autoload.php');
use Algorithm\BotMove;
use Algorithm\Recursion;

$recursion = new Recursion();
$result = $recursion->Frog(8);
var_dump($result);

<?php

$a = rand (0,1);
$b = $a = 0 ? null : rand(1,3);
var_dump($b);
switch($b) {
    case null;
    echo "ноль";
    break;

    case 1;
    echo "один";
    break;

    default:
    echo "другое";
}

var_dump($b != null);
$c = $b ?? rand (20,30);    
var_dump($c);
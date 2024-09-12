<?php

$a = 'лето пришло';
$b = substr($a, 0 , 8);
var_dump($b);
$c = mb_substr($a , -5);
var_dump($c);
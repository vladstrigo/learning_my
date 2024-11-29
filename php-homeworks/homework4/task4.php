<?php

$first = [
    'a' => 'first',
    'b' => 'second',
    'c' => 'third',
    'd' => 'first',
    'f' => 'fifth'
];
$second = count($first);
var_dump($second);

$third = array_flip($first);
$four = count($third);

if ($second != $four) {
    echo 'не равно';
}
else {
    echo 'равно';
}
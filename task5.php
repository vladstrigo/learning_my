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

$a = array_values($third);
$b = ['for b'];
$c = array_merge($a , $b);

$final = array_values($first);
$final2 = array_merge($c , $final);
var_dump($final2);
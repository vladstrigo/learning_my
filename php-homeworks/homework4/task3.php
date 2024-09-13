<?php

$first = [ 
    'a' => 'первая строка' ,
    'b' => 'вторая строка' ,
    'c' => 'третья строка' ,
];

$second = array_keys($first);

$third = array_flip($second);
$four = implode(',' , $third);
echo $four;


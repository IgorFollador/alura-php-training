<?php

$array = [
    1 => 'a',   // key 1
    '1' => 'b', // key 1
    1.5 => 'c', // key 1
    true => 'd' // key 1
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
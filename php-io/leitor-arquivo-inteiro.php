<?php

$fileName = 'lista-cursos.txt';

$file = file_get_contents($fileName);
$fileArray = file($fileName);

echo $file;
var_dump($fileArray);
<?php

$file = fopen('lista-cursos.txt', 'r');

//while(!feof($file)) {
//    $line = fgets($file);
//    echo $line;
//}

$fileSize = filesize('lista-cursos.txt');
echo fread($file, $fileSize);

fclose($file);
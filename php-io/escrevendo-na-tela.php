<?php

echo 'Olá mundo!' . PHP_EOL;

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Saida normal' . PHP_EOL);

//$tela = fopen('php://stderr', 'w');
//fwrite($tela, 'Saida de erro' . PHP_EOL);

fwrite(STDERR, 'Saida de erro' . PHP_EOL);

$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);


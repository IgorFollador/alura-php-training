<?php

$nome = 'Igor Dallazen Follador';
$familia = 'Dallazen';

$ehDaMinhaFamilia = str_contains($nome, $familia);

if ($ehDaMinhaFamilia) {
    echo "$nome é da família $familia" . PHP_EOL;
} else {
    echo "$nome não é da família $familia" . PHP_EOL;
}
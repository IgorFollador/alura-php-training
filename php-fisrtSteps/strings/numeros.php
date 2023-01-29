<?php

$anoNascimento = '2002';

$idade = 2023 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 2002) {
    echo 'É um número' . PHP_EOL;
} else {
    echo 'Não é um número';
}

if ($anoNascimento === 2002) {
    echo 'É um número' . PHP_EOL;
} else {
    echo 'Não é um número';
}
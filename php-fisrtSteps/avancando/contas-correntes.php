<?php

$conta1 = [
    'titular' => 'Igor',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Roberto',
    'saldo' => 1200
];

$conta3 = [
    'titular' => 'Marcela',
    'saldo' => 2300
];

$contasCorrentes = [$conta1, $conta2 , $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Igor',
        'saldo' => 1000
    ],
    12342338920 => [
        'titular' => 'Roberto',
        'saldo' => 1200
    ],
    14445448440 => [
        'titular' => 'Marcela',
        'saldo' => 2300
    ]
];

foreach ($contasCorrentes as $key => $conta) {
    echo "$key => " . $conta['titular'] . PHP_EOL;
}
<?php

$alunos2022 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Vinicius',
    'Luis'
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Arthur'
];

$alunos2023 = array_merge($alunos2022, $novosAlunos);
var_dump($alunos2023);
var_dump([...$alunos2022, ...$novosAlunos]);
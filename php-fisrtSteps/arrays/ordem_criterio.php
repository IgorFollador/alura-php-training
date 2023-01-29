<?php

$notas = [
    [
        'aluno' => 'Vinícius',
        'nota' => 10
    ],
    [
        'aluno' => 'Maria',
        'nota' => 8
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9.6
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

//function ordenaNotas(array $nota1, array $nota2): int
//{
//    if ($nota1['nota'] > $nota2['nota'])  {
//        return -1;
//    }
//
//    if ($nota2['nota'] > $nota1['nota']) {
//        return 1;
//    }
//
//    return 0;
//}


usort($notas, 'ordenaNotas');
var_dump($notas);
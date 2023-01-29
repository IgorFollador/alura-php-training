<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
    'Igor' => null,
    'Luis' => 10
];

ksort($notas); // Ordena (pelas chaves) mantendo as chaves
var_dump($notas);
arsort($notas); // Ordena (pelos valores) o reverso mantendo as chaves
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

if (array_key_exists('Vinicius', $notas)) {
    echo 'Vinicius fez a prova' . PHP_EOL;
}

echo 'Igor fez a prova?' . PHP_EOL;
var_dump(isset($notas['Igor']));

echo 'Algém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Algém tirou 5?' . PHP_EOL;
var_dump(in_array(5, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas));

// array_key_exists = verifica se a chave existe
// isset = verifica se a chave existe e ñ é nula
// in_array = verifica se o valor existe
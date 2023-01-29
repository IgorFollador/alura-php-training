<?php

$nome = 'Igor Follador';
$email = ' igor.follador@bodypath.com.br  ';
$password = 'aaç';

if (mb_strlen($password) < 8) {
    echo mb_strtoupper($password) . PHP_EOL;
    echo 'Senha insegura' . PHP_EOL;
}

$arrobaPos = strpos($email, '@');
echo 'Meu username é ' . substr($email, 0, $arrobaPos) .PHP_EOL;
echo 'Meu domínio é '. substr($email, $arrobaPos+1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'igor,follador,teste,csv,20';

var_dump(explode(',', $csv));
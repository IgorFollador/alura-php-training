<?php

$idade = 16;
$nome = 'Igor';
$acompanhado = true;

echo 'Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado.' . PHP_EOL;

if ($idade >= 18 && $nome == 'Igor') {
    echo "Você tem $idade anos. Pode entrar sozinho!";
} elseif ($idade >= 16 && $acompanhado) {
    echo "Você tem $idade anos e esta acompanhado. Pode entrar!";
} else {
    echo "Você só tem $idade anos. Você não pode entrar!";
}

echo PHP_EOL;
echo 'Goodbye!';

//Precedence: && > || > and > or
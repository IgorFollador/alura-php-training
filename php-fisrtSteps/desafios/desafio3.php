<?php

$peso = 80;
$altura = 174;
$imc = $peso / ($altura / 100) ** 2;

echo "Seu IMC é de $imc. Você esta com o IMC ";

if ($imc < 18.5) {
    echo 'abaixo';
} elseif ($imc < 25 ) {
    echo 'dentro';
} else {
    echo 'acima';
}

echo ' do recomendado.';
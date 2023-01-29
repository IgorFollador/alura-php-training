<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new CPF('029.346.100-71'),
        'Igor Follador',
        new Endereco('Barão de Cotegipe', 'Centro', 'Avenida Adão Welker', '81')
    ),
    2
);

$conta->depositar(600);
$conta->sacar(100);

echo $conta->getSaldo();
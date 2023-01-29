<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Diretor(
    'Carminatti',
    new CPF('333.346.100-71'),
    9000
);

$autenticador->login($diretor, '1234');
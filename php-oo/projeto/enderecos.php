<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$enderecoCasa = new Endereco('Barão de Cotegipe', 'Centro', 'Av. Adão Welker', '81');
$enderecoTrabalho = new Endereco('Erechim', 'Centro', 'Av. Alemanha', 900);

echo $enderecoTrabalho . PHP_EOL;

echo $enderecoCasa->cidade;
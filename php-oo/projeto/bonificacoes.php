<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};

$desenvolvedor = new Desenvolvedor(
    'Igor Follador',
    new CPF('021.346.100-71'),
    1800
);

$gerente = new Gerente(
    'Luana Follador',
    new CPF('028.346.100-71'),
    3000
);

$diretor = new Diretor(
    'Carminatti',
    new CPF('333.346.100-71'),
    9000
);

$editorVideo = new \Alura\Banco\Modelo\Funcionario\EditorVideo(
    'Paulo',
    new CPF('333.333.333-71'),
    2900
);

//$desenvolvedor->sobeDeNivel();

$controladorDeBonificacoes = new ControladorDeBonificacoes();

$controladorDeBonificacoes->adicionaBonificacaoDe($desenvolvedor);
$controladorDeBonificacoes->adicionaBonificacaoDe($gerente);
$controladorDeBonificacoes->adicionaBonificacaoDe($diretor);
$controladorDeBonificacoes->adicionaBonificacaoDe($editorVideo);

echo $controladorDeBonificacoes->recuperaTotal();
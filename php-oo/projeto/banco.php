<?php
    require_once 'autoload.php';

    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\Conta\Conta;
    use Alura\Banco\Modelo\Conta\ContaPoupanca;
    use Alura\Banco\Modelo\Conta\Titular;
    use Alura\Banco\Modelo\CPF;

    $endereco = new Endereco('Barão de Cotegipe', 'Centro', 'Av. Adão Welker', '81');
    $conta = new ContaPoupanca(new Titular(new CPF('029.346.100-71'), 'Igor Follador', $endereco));

    $conta->depositar(300);
    $conta->sacar(200);

    echo $conta->getCpf() . PHP_EOL;
    echo $conta->getNome() . PHP_EOL;
    echo $conta->getSaldo() . PHP_EOL;

    echo Conta::getNumeroDeContas() . PHP_EOL;

    var_dump($conta->getEndereco());

    unset($conta);
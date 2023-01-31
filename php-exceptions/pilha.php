<?php

function funcao1()
{
    echo 'Executando a função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $err) {
        echo $err->getMessage() . PHP_EOL;
        echo $err->getLine() . PHP_EOL;
        echo $err->getTraceAsString() . PHP_EOL;
        throw new RuntimeException('Exceção foi tratada, mas, pega aí', 1, $err);
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Executando a função 2' . PHP_EOL;

    $exception = new RuntimeException('Iih deu ruim');
    throw $exception;

//    $arrayFixo = new SplFixedArray(2);
//    $arrayFixo[3] = 'Ops, exception!';

    $div = intdiv(5,0);

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
try {
    funcao1();
}catch (Exception $err) {
    echo 'Pegando exception genérico' . PHP_EOL;
}
echo 'Finalizando o programa principal' . PHP_EOL;

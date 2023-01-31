<?php

$arquivo = fopen('php://temp', 'w');

try {
    fwrite($arquivo, 'Aa Bb Cc');
    throw new Exception();
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
    fclose($arquivo);
    echo "Cai no finally";
}
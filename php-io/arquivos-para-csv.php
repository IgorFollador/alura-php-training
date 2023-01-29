<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'SIM'];

    fputcsv($arquivoCsv, $linha, ';');

//    fwrite($arquivoCsv, implode(',', $linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'NÃO'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
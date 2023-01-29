<?php

//$dados = ['Vinicius', 10, 24];
//list($nome, $nota, $idade) = $dados;
//var_dump($nome, $nota, $idade);

$dados = [
  'nome' => 'Igor',
  'nota' => 10,
  'idade' => 20
];

// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));
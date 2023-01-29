<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '2002'
    ]
]);
echo file_get_contents('zip://password.zip#lista-cursos.txt', false, $contexto);
// possivel tbm com fopen
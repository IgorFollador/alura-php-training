<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => "X-From: php\r\n" .
                    "Content-Type: text/plain",
        'content' => 'Teste de envio do corpo da requisição'
    ]
]);

echo file_get_contents('http://httpbin.org/delete', false, $contexto);
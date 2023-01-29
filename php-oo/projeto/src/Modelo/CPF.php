<?php

namespace Alura\Banco\Modelo;

class CPF
{
    private string $cpf;

    public function __construct($cpf)
    {
        $this->validaCpfTitular($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    private function validaCpfTitular(string $cpf)
    {
        $numero = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
    }
}
<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get(string $name)
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }

}
<?php

namespace Alura\Banco\Modelo;

/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

class Endereco
{
    use AcessoPropriedade;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro} - {$this->cidade}";
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }


    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
}
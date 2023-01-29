<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedade;
    protected String $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function setCpf(CPF $cpf): void
    {
        $this->cpf = $cpf;
    }

    protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }
}
<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Endereco;
abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;

        $this->saldo = 0;

        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 1) {
            echo 'Há mais de uma conta ativa' . PHP_EOL;
        }
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->getPercentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo 'Valor indisponível';
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar <= 0) {
            echo 'Valor precisa ser positivo';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function getCpf(): string
    {
        return $this->titular->getCpf();
    }

    public function getNome(): string
    {
        return $this->titular->getNome();
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getEndereco(): Endereco
    {
        return $this->titular->getEndereco();
    }

    public static function getNumeroDeContas(): int
    {
        // return Conta::$numeroDeContas;
        return self::$numeroDeContas;
    }

    abstract protected function getPercentualTarifa(): float;
}
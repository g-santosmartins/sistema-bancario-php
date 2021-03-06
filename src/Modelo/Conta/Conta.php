<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Cpf;

abstract class Conta
{
    private Titular $titular;
    protected int $saldo;

    //comum a todas
    public static int $numeroDeContas = 0;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        //acessando metodo estático
        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca( float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return; //sai do metodo
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;

    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível!";
            return;
        }

        //removendo de uma conta
        $this->saca($valorATransferir);

        //colocando na outra contra
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas + 1;
    }

    //preciso que seja implementado isso aqui é quase um contrato
    abstract protected function percentualTarifa(): float;
}


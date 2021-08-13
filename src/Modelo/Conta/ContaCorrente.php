<?php


namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
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
}
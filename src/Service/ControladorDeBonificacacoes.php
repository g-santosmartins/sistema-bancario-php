<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacacoes
{
    private int $totalBonfificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
     $this->totalBonfificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonfificacoes;
    }
}
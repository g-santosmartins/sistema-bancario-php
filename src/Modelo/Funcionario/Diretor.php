<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    //sobrescreve o metodo para dois salarios
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '1234';
    }
}
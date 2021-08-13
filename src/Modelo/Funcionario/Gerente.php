<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    // sobre escreve o metodo para um salario
    public function calculaBonificacao() : float
    {
        return $this->recuperaSalario();
    }
}
<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    // sobre escreve o metodo para um salario
    public function calculaBonificacao() : float
    {
        return $this->recuperaSalario();
    }

   public function podeAutenticar(string $senha): bool
   {
       return $senha === '4321';
   }
}
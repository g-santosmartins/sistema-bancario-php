<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
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
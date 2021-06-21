<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    public Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf )
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


    protected function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5 )  {
            echo "Impossível o nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}
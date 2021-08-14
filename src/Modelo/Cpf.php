<?php

namespace Alura\Banco\Modelo;
final class Cpf
{
    private string $numeroCpf;

    public function __construct(string $numeroCpf)
    {
       $this->numeroCpf = $numeroCpf;

        // validando o formato cpf deve retornar falso se falhar, e a mensagem de erro será ecoada
        $numeroCpf = filter_var($numeroCpf, FILTER_VALIDATE_REGEXP, [
           'options' => [
               'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
           ]
       ]);

       if($numeroCpf=== false){
           echo "Cpf inválido";
           exit();
       }
    }

    public function recuperaNumero(): string
    {
        return $this->numeroCpf;
    }
}
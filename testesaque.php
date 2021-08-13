<?php

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, Cpf};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.567.567-10'),
        'Guilherme Martins',
        new Endereco('Marília', 'Jardim Virginia', 'Rua lá', '37')
    ), 1
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
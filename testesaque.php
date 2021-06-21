<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.567.567-10'),
        'Guilherme Martins',
        new Endereco('Marília', 'Jardim Virginia', 'Rua lá', '37')
    ), 1
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
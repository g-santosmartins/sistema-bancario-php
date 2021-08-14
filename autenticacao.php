<?php


use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new Cpf('343.434.343-65'),
    10000
);

$autenticador->tentaLogin($umDiretor,'1234');
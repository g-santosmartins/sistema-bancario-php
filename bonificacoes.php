<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacacoes;
use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};


$umDesenvolvedor = new Desenvolvedor(
    'Guilherme',
    new Cpf('123.456.789-10'),
    1000
);

$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(
    'Patricia',
    new Cpf('468.123.123-12'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new Cpf('123.123.434-23'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new Cpf('343.234.423-34'),
    1500
);

$controlador = new ControladorDeBonificacacoes();
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
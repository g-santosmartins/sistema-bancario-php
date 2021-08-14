<?php


use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'bairro Qualquer', 'Minha rua', '10');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua ai', '20');

echo $umEndereco->Cidade = 'Nova cidade';
echo $umEndereco->Cidade; exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
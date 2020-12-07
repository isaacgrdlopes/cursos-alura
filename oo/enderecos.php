<?php

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Manuel', 'Vila Santa Helena', 'R. Antonio Plese', '51');
$outroEndereco = new Endereco('Bauru', 'Vila Cardia', 'R. Gusmão', '17-17');

echo $umEndereco->cidade = 'Bauru';

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
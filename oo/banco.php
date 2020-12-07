<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;

$endereco = new Endereco('São Manuel', 'Vila Santa Helena', 'R. Antonio Plese', '51');
$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Isaac', $endereco));
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroContas();

var_dump($primeiraConta);
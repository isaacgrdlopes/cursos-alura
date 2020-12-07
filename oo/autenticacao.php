<?php

use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Cpf;

require_once "autoload.php";

$autenticador = new Autenticador();
$umDiretor = new Diretor(new Cpf('123.456.789-10'), 'Isaac Lopes', 3000);

$autenticador->tentaLogin($umDiretor, '1234');
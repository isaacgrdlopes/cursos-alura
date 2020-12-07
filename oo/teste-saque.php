<?php

use Alura\Banco\Model\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Model\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Isaac Lopes',
        new Endereco('São Manuel', 'Vila Santa Helena', 'R. Antonio Plese', '51'),
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
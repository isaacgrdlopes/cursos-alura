<?php

require_once 'autoload.php';


use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\{Diretor, Gerente};

$umFuncionario = new Diretor(
    new CPF('123.456.789-10'),
    'Isaac Lopes',
    1000
);

$umaFuncionaria = new Gerente(
    new CPF('987.654.321-10'),
    'Debora',
    3000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
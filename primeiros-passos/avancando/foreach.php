<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Isaac', 
        'saldo' => 1000
    ],
    '123.456.289-11' => [
        'titular' => 'Joao', 
        'saldo' => 500
    ], 
    '123.456.489-12' => [
        'titular' => 'Steve', 
        'saldo' => 10000
    ]
];

$contasCorrentes['123.875.489-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " .$conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}
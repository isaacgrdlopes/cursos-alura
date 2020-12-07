<?php

$conta1 = ['titular' => 'Isaac', 'saldo' => 1000];
$conta2 = ['titular' => 'Joao', 'saldo' => 500];
$conta3 = ['titular' => 'Steve', 'saldo' => 10000];
$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}
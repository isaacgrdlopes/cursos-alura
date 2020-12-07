<?php

require_once 'funcoes.php';

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

$contasCorrentes['123.875.489-12'] = sacar($contasCorrentes['123.875.489-12'], 500);
$contasCorrentes['123.456.289-11'] = depositar($contasCorrentes['123.456.289-11'], 500);
titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

unset($contasCorrentes['123.875.489-12']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
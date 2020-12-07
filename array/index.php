<?php

require_once 'src/Calculadora.php';

$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if($media){
    echo "A Media é: $media";
} else {
    echo "Não foi possível calcular a média";
}
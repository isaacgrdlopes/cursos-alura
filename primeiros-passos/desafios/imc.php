<?php

$peso = 100;
$altura = 1.80;

$imc = $peso / $altura ** 2;

if ($imc < 18.5){
    echo "Seu IMC é $imc. Você está abaixo do Peso!";
} elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Seu IMC é $imc. Você está com o Peso Normal!";
} elseif ($imc >= 25 && $imc <= 29.9){
    echo "Seu IMC é $imc. Você está com Sobrepeso!";
} elseif ($imc >=30 && $imc <= 34.9){
    echo "Seu IMC é $imc. Você está com Obesidade Grau I!";
} elseif ($imc >=35 && $imc <= 39.9){
    echo "Seu IMC é $imc. Você está com Obesidade Grau II!";
} elseif ($imc > 40){
    echo "Seu IMC é $imc. Você está com Obesidade Grau III ou Mórbida!";
}
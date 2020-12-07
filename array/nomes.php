<?php

$nomes = "Isaac, Eliel, Ingrid, Débora";

$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes);
echo $nomesJuntos;
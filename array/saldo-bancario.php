<?php

$saldos =[5000, 4500, 3600, 7800, 500];

foreach($saldos as $saldo){
    echo "<p>O saldo é: $saldo</p>";
}

sort($saldos);

echo "<p>O menor saldo é: $saldos[0]</p>";
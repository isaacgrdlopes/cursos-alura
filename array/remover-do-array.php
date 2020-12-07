<?php declare(strict_types=1);

require_once "autoload.php";

use Alura\ArrayUtils;

$correntistas = [
    "Giovani",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

ArrayUtils::remover('12', $correntistas);

echo "<pre>";
var_dump($correntistas);
echo "</pre>";
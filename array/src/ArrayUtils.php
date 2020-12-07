<?php

namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);

        if(is_int($posicao) != true){
            echo "Não foi encontrado no array";
            return;
        }

        unset($array[$posicao]);
    }
}
<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Ok. Usuario Logado no Sistema.";
        } else {
            echo "Senha Incorreta.";
        }
    }
}
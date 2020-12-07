<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Cpf;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
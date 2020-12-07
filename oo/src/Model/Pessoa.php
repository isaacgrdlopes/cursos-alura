<?php

namespace Alura\Banco\Model;

abstract class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumCpf();
    }

    final protected function validaNome(string $nome) : void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
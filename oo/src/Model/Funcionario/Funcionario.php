<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;

abstract class Funcionario extends Pessoa
{
    private string $salario;

    public function __construct(Cpf $cpf, string $nome, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function recuperaSalario() : float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome) : void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract function calculaBonificacao() : float;
}
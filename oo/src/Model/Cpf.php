<?php

namespace Alura\Banco\Model;

final class Cpf 
{
    private string $numCpf;

    public function __construct(string $numCpf)
    {
        $this->numCpf = $numCpf;
    }

    public function recuperaNumCpf() : string
    {
        return $this->numCpf;
    }
}
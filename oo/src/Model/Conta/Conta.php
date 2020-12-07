<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;  
        self::$numeroDeContas++;
    }

    public function saca(float $valorASacar) : void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar) : void
    {
        if ($valorADepositar < 0){
            echo "Para depositar informe um número positivo ou maior que zero";
            return;
        } 

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo() : float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular() : string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular() : string
    {
        return $this->titular->recuperaNome();
    }

    static function recuperaNumeroContas() : int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa() : float;
}
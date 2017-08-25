<?php

class Conta
{
    public $agencia;
    public $saldo = 10.000;
    public $nConta;
    public $senha;
    public $limite;
    public $dono;

    public function deposito($valor)
    {
        $this->saldo += $valor;
    }

    public function saque($valor)
    {
        $this->saldo -= $valor;
    }

    public function consultaSaldo()
    {

    }
}
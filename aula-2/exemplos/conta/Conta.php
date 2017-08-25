<?php

class Conta
{
    /**
     * O attribute $saldo começa com o valor 0
     */
    public $saldo = 0;

    /**
     * O $proprietário começa nulo (null)
     */
    public $proprietario;

    /**
     * Este método recebe um parâmetro $valor, e saca do
     * saldo atual da conta
     */
    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
}
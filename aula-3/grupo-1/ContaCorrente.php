<?php


class ContaCorrente extends Conta
{
    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function consultarSaque(){
           return $this->sacar();
    }
}

<?php


class ContaCorrente extends Conta
{
    public function getConsultarSaldo()
    {
        return $this->saldo;
    }

    public function consultarSaque(){
           return $this->sacar();
    }
}

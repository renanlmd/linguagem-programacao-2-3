<?php

/**
* Nossa classe ContaCorrente, que extende da classe Conta
* Ela herda tudo que o pai tem.
*/
class ContaCorrente extends Conta
{
    public function consultarSaldo()
    {
        /**
         * number_format vai formatar o nosso saldo
         *
         * Observe o "return", funciona igual na função.
         */
        return number_format($this->saldo, 2, ',', '.');
    }
}
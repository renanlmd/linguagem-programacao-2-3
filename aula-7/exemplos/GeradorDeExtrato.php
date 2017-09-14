<?php

/**
* 
*/
class GeradorDeExtrato
{
	public function gerarExtrato(Conta $conta)
	{
		echo "Saldo atual: " . $conta->getSaldo();
	}
}
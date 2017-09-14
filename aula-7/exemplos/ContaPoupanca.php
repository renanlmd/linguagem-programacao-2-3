<?php

class ContaPoupanca implements Conta
{
	protected $saldo = 0;

	public function depositar($valor)
	{
		$this->saldo += $valor;
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}


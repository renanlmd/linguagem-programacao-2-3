<?php

class ContaCorrente implements Conta
{
	protected $saldo = 0;
	protected $taxaOperacao = 0.45;

	public function depositar($valor)
	{
		$this->saldo += $valor - $this->taxaOperacao;
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor + $this->taxaOperacao;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}
}
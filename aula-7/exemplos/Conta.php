<?php

interface Conta
{
	public function depositar($valor);

	public function sacar($valor);

	public function getSaldo();
}


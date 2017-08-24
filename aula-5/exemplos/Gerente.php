<?php

class Gerente extends Funcionario
{
	public function getBonificacao()
	{
		return $this->salario * 0.15;
	}
}
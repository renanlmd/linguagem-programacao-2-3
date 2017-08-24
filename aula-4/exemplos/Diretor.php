<?php

class Diretor extends Funcionario
{
	public function getBonificacao()
	{
		return $this->salario * 0.10 + 1000;
	}
}
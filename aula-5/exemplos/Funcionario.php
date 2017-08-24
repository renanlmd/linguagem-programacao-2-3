<?php

abstract class Funcionario
{
	protected $nome;
	protected $cpf;
	protected $salario;

	public abstract function getBonificacao();
}
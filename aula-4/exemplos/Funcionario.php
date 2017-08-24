<?php

class Funcionario
{
	protected $nome;
	protected $cpf;
	protected $salario;

	public function __construct($nome = null, $cpf = null, $salario = null)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->salario = $salario;
	}

	public function getBonificacao()
	{
		return $this->salario * 0.10;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function setSalario($salario)
	{
		$this->salario = $salario;
	}

	public function getSalario()
	{
		return $this->salario;
	}
}
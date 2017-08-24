<?php

class Gerente extends Funcionario
{
	protected $senha;
	protected $numeroDeFuncionariosGerenciados;

	public function autentica($senha)
	{
		if($senha === $this->senha) {
			echo "Acesso permitido!";
			return true;
		} else {
			echo "Acesso Negado!";
			return false;
		}
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function setNumeroDeFuncionariosGerenciados($numero)
	{
		$this->numeroDeFuncionariosGerenciados = $numero;
	}

	public function getNumeroDeFuncionariosGerenciados()
	{
		return $this->numeroDeFuncionariosGerenciados;
	}
}
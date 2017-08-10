<?php


class Eletronico
{
	protected $nome;
	protected $descricao;
	protected $preco;

	public function __construct($nome, $descricao, $preco)
	{
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
	}
}
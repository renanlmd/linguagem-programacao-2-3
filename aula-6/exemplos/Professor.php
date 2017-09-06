<?php

class Professor
{
	protected $nome;
	protected $materiais = [];

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		$this->nome;
	}

	public function adicionarMaterial(Material $material)
	{
		$this->materiais[] = $material;

		return true;
	}

	public function getListaMateriais()
	{
		return $this->materiais;
	}
}
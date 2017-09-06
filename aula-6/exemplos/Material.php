<?php

class Material
{
	protected $descricao;
	protected $tipo;
	protected $patrimonio;
	protected $estado;

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setPatrimonio($patrimonio)
	{
		$this->patrimonio = $patrimonio;
	}

	public function getPatrimonio()
	{
		return $this->patrimonio;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function getEstado()
	{
		return $this->estado;
	}

}
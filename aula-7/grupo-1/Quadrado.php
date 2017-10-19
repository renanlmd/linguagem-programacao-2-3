<?php

class Quadrado implements FiguraGeometrica
{
	protected $lado = 0;
	protected $nomeFigura = "Quadrado";

	public function setLado($lado){
		$this->lado = $lado;
	}

	public function getLado(){
		return $this->lado;
	}

	public function getArea(){
		return $this->lado * $this->lado;
	}
	
	public function getPerimetro(){
		return $this->lado * 4;
	}
	public function getNomeFigura(){
		return $this->nomeFigura;
	}
}
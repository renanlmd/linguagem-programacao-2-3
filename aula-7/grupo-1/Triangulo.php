<?php

class Triangulo implements FiguraGeometrica
{
	protected $base = 0;
	protected $altura = 0;
	protected $ladoA = 0;
	protected $ladoB = 0;
	protected $ladoC = 0;
	protected $nomeFigura = "Triangulo";

	public function setBase($base){
		$this->base = $base;
	}

	public function getBase(){
		return $this->base;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setLadoA($ladoA){
		$this->ladoA = $ladoA;
	}

	public function getLadoA(){
		return $this->ladoA;
	}

	public function setLadoB($ladoB){
		$this->ladoB = $ladoB;
	}

	public function getLadoB(){
		return $this->ladoB;
	}

	public function setLadoC($ladoC){
		$this->ladoC = $ladoC;
	}

	public function getLadoC(){
		return $this->ladoC;
	}

	public function getNomeFigura(){
		return $this->nomeFigura;
	}

	public function getArea(){
		return ($this->base * $this->altura)/2;
	}

	public function getPerimetro(){
		return $this->ladoA + $this->ladoB + $this->ladoC;
	}
}
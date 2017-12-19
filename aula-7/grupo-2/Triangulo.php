<?php

 class Triangulo implements FormaGeometrica
 {
 	public $base = 0;
 	public $altura = 0;
 	public $ladoA = 0;
 	public $ladoB = 0;
 	public $ladoC = 0;
 	public $nome = "Triangulo";

 	public function getBase()
 	{
 		return $this->base;
 	}

 	public function setBase($base)
 	{
 		return $this->base = $base;
 	}

 	public function getAltura()
 	{
 		return $this->altura;
 	}

 	public function setAltura($altura)
 	{
 		return $this->altura = $altura;
 	}

 	public function getLadoA()
 	{
 		return $this->ladoA;
 	}
 	public function setLadoA($ladoA)
 	{
 		return $this->ladoA = $ladoA;
 	}

 	public function getLadoB()
 	{
 		return $this->ladoB;
 	}

 	public function setLadoB($ladoB)
 	{
 		return $this->ladoB = $ladoB;
 	}

 	public function getLadoC()
 	{
 		return $this->ladoC;
 	}

 	public function setLadoC($ladoC)
 	{
 		return $this->ladoC = $ladoC;
 	}

 	public function getArea()
 	{
 		return $this-> base * $this->altura / 2;
 	}

 	public function getNomeForma()
 	{
 		return $this->nome;
 	}

 	public function getPerimetro()
 	{
 		return $this->ladoA + $this->ladoB + $this->ladoC;
 	}
 }

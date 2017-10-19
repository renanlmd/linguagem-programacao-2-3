<?php
 class Triangulo implements FiguraGeometrica
 {
 	protected $base =0;
 	protected $altura =0;
 	protected $ladoA =0;
 	protected $ladoB =0;
 	protected $ladoC =0;
 	protected $NomeFigura = "Triangulo";

 	public function getBase(){
 		return $this->base;
 	}
 	public function setBase($base){
 		$this->base = $base;
 	}
 	public function getAltura(){
 		return $this->altura;
 	}
 	public function setAltura($altura){
 		$this->altura = $altura;
 	}
 	public function getLadoA(){
 		return $this->ladoA;
 	}
 	public function setLadoA($ladoA){
 		$this->ladoA = $ladoA;
 	}
 	public function getLadoB(){
 		return $this->ladoB;
 	}
 	public function setLadoB($ladoB){
 		$this->ladoB = $ladoB;
 	}
 	public function getLadoC(){
 		return $this->ladoC;
 	}
 	public function setLadoC($ladoC){
 		$this->ladoC = $ladoC;
 	}
 	public function getArea(){
 		return ($this->base * $this->altura) / 2;
 	}
 	public function getPerimentro(){
 		return $this->ladoA + $this->ladoB + $this->ladoC;
 	}
 	public function getNomeFigura(){
 		return $this->NomeFigura;
 	}
 }

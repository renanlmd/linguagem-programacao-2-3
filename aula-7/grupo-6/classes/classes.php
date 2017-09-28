<?php 


class Calculadora{

  protected $result;
  protected $a;
  protected $b;

	public function setSoma($a,$b){
 		$this->result=$a+$b;
	}
	public function getSoma(){
 		return $this->result;
	}
	
	public function setSub($a,$b){
		$this->result=$a-$b;
	}
	public function getSub(){
		return $this->result;
	}


	public function setMult($a,$b){
		$this->result=$a * $b;
	}
	public function getMult(){
		return $this->result;
	}


	public function setDiv($a,$b){
		$this->result=$a / $b;
	}
	public function getDiv(){
	return $this->result;

	}


}
class CalculadoraCientifica extends Calculadora{

		public function setRaizQuadrada($a){

			$this->result=sqrt($a);
		}
		public function getRaizQuadrada(){
			return $this->result;
		}
	}
#--------------------------------------

interface FiguraGeometrica {
	public function getNomeFigura();
	public function getArea();
	public function getPerimetro();
}
	class Quadrado implements FiguraGeometrica{
		public $lado;
		public $nomefigura = "Quadrado";

		public function setLado($lado){
			$this->lado=$lado;
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
						
			return $this->nomefigura;
		}

	}
#--------------------------------------------
	
	class Triangulo implements FiguraGeometrica{
		public $base;
		public $altura;
		public $ladoA;
		public $ladoB;
		public $ladoC;
		public $nomeFigura="Triangulo";

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


		public function getArea(){
			return ($this->base * $this->altura)/2;

		}
		public function getNomeFigura(){
			return $this->nomeFigura;
		}
		public function getPerimetro(){
			return $this->ladoA + $this->ladoB + $this->ladoC;
	}
	}

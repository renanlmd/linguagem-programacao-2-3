<?php

class Empregado{
	

 	public $nome;
	public $snome;
	public $salario_men;
	protected $porcentagem;


		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			$this->nome;
		}
#----------------------------
		public function setSnome($snome){
			$this->snome = $snome;
		}
		public function getSnome(){
			$this->nome;
		}
#----------------------------
		public function setSalario_men($salario_men){
			$this->salario_men = $salario_men;
		}

		public function getSalario_men(){
			$this->salario_men;
		}
#----------------------------
		public function setValor($valor){
			$this->valor = $valor;
		}

		public function getValor(){
			$this->valor;
		}
#----------------------------
		
		public function calculaAumento($porcentagem){
			$this->porcentagem=($porcentagem/100)+1;
			}
		public function pagamento($valor){
		
			$this->calculaAumento($valor);
			$this->salario_men=$this->salario_men * $this->porcentagem;

		}


	public function __toString(){
		return "Nome funcionario: $this->nome $this->snome\nSeu salario é de :$this->salario_men R$\n";
	}

	}




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
	
	



?>
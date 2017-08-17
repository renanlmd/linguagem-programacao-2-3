<?php 

class Form
{
	
	private $resultado;
	public function calcularArea(){

	}

}

class Retangulo extends Form
{
	private $largura;
 	private $altura;
 	
 	public function __construct($altura,$largura){
 		$this->largura=$largura;
 		$this->altura=$altura;
 }
 	public function calcularArea(){

		$this->resultado = ($this->largura) * ($this->altura);
		echo $this->resultado;
 	}
}
class Quadrado	 extends Retangulo{
 	public function __construct($lado){
 		$this->largura=$lado;
 		$this->altura=$lado;
 }
	public function calcularArea(){

		$this->resultado = ($this->largura) * ($this->altura);
		echo $this->resultado;

	} 

}

class Circulo extends Form
{
 	private $raio;
 	public function __construct($raio){
 		$this->raio=$raio;

 }
 	public function calcularArea(){
		$this->resultado= pow($this->raio, 2) * pi();
		echo $this->resultado;
 }
}

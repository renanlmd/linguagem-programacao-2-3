<?php 

 class Quadrado implements FiguraGeometrica
 {
 	protected $lado =0;
 	protected $NomeFigura = "Quadrado";

 	public function getArea(){
 		return $this->lado * $this->lado;
 	}
 	public function getPerimentro(){
 		return $this->lado * 4;
 	}
 	public function getNomeFigura(){
 		return $this->NomeFigura;
 	}

 	public function getLado(){
 		return $this->lado;
 	}
 	public function setLado($lado){
 		$this->lado = $lado;
 	}

 }
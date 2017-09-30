<?php
	 class Quadrado implements FiguraGeometrica
	 {
	 	protected $lado=0;
	 	protected $NomeFigura = "Quadradou";
	 
	 	public function getNomeFigura(){
 		return $this->NomeFigura;
 		}
 		public function getArea(){
 		return $this->lado * $this->lado;
 		}

 		public function setArea($area){
 		$this->area = $area;
 		}
 		public function getPerimentro(){
 		return $this->lado * 4;
 		}

 		public function getLado(){
 		return $this->lado;
 		}

 		public function setLado($lado){
 		$this->lado = $lado;
 	}
 }

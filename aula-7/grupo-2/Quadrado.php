<?php

 class Quadrado implements FormaGeometrica
 {
 	public $lado = 0;
 	public $nome = "Quadrado";

    public function getLado()
    {
    	return $this->lado;
    }

    public function setLado($lado)
    {
    	return $this->lado = $lado;
    }

    public function getPerimetro()
    {
    	return $this->lado * 4;
    }

    public function getNomeForma()
    {
    	return $this->nome;
    }

    public function getArea()
    {
    	return $this->lado * $this-> lado;
    }
 }

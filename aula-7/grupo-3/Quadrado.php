<?php

 class Quadrado implements FiguraGeometrica
 {
 	public $lado =0;
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

    public function getNomeFigura()
    {
    	return $this->nome;
    }

    public function getArea()
    {
    	return $this->lado * $this-> lado;
    }
 }
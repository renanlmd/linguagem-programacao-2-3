<?php

class Retangulo implements Forma 
{
	protected $lagura = 0;
	protected $altura = 0;

	public function getcalcularArea(){
		return $this->lagura * $this->altura;	
	}

	public function getLagura(){
		return $this->lagura;
	}

	public function setLagura($lagura){
		$this->lagura = $lagura;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}
} 
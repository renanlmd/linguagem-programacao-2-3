<?php

include("agenda.php");

class Contato extends Agenda{

	protected $nome;
	protected $email;

	public function __construct($n,$e){
		$this->nome = $n;
		$this->email = $e;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setNome($n){
		$this->nome = $n;
	}
	public function setEmail($e){
		$this->email = $e;
	}

}

<?php 

class Contato extends Agenda{

	public function __construct($nome, $email)
	{
		$this->nome = $nome;
		$this->email= $email;
	}
	
	public function GetNome(){
		return $this->nome;
	}

	public function SetNome($nome){
		return $this->nome = $nome;
	}
	public function GetEmail(){
		return $this->email;
	}
	public function setemail($email){
		return $this->email = $email;
	}

}

?>
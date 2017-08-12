<?php 

class contato
{
	protected $nome;
	protected $email;

	public function __construct($nome, $email)
	{
		$this->nome = $nome;
		$this->email= $email;
	}


	public function GetNome(){
		return this->nome;
		//nao entendi oque faz isso.
	}

	public function SetNome($nome){
		return this->nome = $nome;
	}
	public function GetEmail(){
		return this->email;
	}
	public function setemail($email){
		return this->email = $email;
	}

}

?>
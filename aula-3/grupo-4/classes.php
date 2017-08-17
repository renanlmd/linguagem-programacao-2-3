<?php
#Classes
class Empregado{
	

 	private $nome;
	private $snome;
	private $salario_men;
	private $porcentagem;

	public function __construct($nome,$snome,$salario_men,$valor){
		$this->nome=$nome;
		$this->snome=$snome;
		$this->salario_men=$salario_men;
		$this->calculaAumento($valor);
		$this->salario_men=$this->salario_men * $this->porcentagem;

	}

	public function calculaAumento($porcentagem){
		$this->porcentagem=($porcentagem/100)+1;
			}
	public function __toString(){
		return "Nome funcionario: $this->nome $this->snome\nSeu salario é de :$this->salario_men R$\n";
	}

	

	
	}


?>
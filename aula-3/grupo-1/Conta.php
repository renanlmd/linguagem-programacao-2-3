<?php

class Conta
{
       public $saldo = 0;
       public  $limiteSaque = 1000;


       public function proprietarioConta(){
           $nome = "Renan Almeida";
           return $nome;
    }

    public function deposito($valor)
    {
        return $this->saldo += $valor;
    }
    public function sacar($valor){

      if ($this->saldo > $valor) {
              return $this->saldo -= $valor;
      }
      else{
              return false;
      }
    }

}

<?php

class Conta implements TipoConta
{
    protected $tipoConta;
    protected $saldo = 0;
    protected $proprietarioConta;
    protected $numeroConta;
    public  $limiteSaque = 1000;


    public function setTipoConta($tipo){
      $this->tipoConta = $tipo;
    }

    public function getTipoConta(){
      return $this->tipoConta;
    }

    public function setProprietarioConta($dono){
      $this->proprietarioConta = $dono;
    }
    public function getProprietarioConta(){
      return $this->proprietarioConta;
    }

    public function setNumeroConta($numero){
      $this->numeroConta = $numero;
    }
    public function getNumeroConta(){
      return $this->numeroConta;
    }

    public function Deposito($valor)
    {
      return $this->saldo += $valor;
    }

    public function getConsultarSaldo(){
      return $this->saldo;
    }
    public function Sacar($valor){

      if ($this->saldo > $valor) {
        return $this->saldo -= $valor;
      }
      else{
        return false;
      }
    }

}

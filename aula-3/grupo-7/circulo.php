<?php

class Circulo implements Forma
{
   protected $raio = 0;
   protected $pi = 0;

   public function getcalcularArea(){
   	return pow($this->raio,2) * $this->pi;
   }

   public function getRaio(){
   	return $this->raio;
   }

   public function setRaio($raio){
   	$this->raio = $raio;
   }

   public function getPi(){
   	return $this->pi;
   }

   public function SetPi($pi){
   	$this->pi = $pi;
   }

}
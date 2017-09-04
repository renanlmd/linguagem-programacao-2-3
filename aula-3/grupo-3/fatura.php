<?php

class fatura
{
	
public $numitem;
public $descitem;
public $quanitem;
public $precitem;

public function relatorio($numitem, $descitem, $quanitem, $precitem)
{

	$this ->numitem = $numitem;
	$this ->descitem = $descitem;
	$this ->quanitem = $quanitem;
	$this ->precitem =$precitem;

}

public function getTotal(){

return $this->quanitem*0



}



?>
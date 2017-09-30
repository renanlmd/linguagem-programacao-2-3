<?php 
require_once __DIR__."/InterfaceFatura.php";
 require_once __DIR__."/Fatura.php";

$fatura = new Fatura(23,"mouse",10.00,2);
 var_dump($fatura->getTotalFatura());

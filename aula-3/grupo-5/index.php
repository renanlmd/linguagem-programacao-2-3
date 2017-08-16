<?php 
require "classes/data.php";
$data= new Data('16/10/221997');
echo "$data";

$data->setDia(17);
$data->setMes(10);
$data->setAno(1997);
echo $data->getDia();
echo $data->getMes();
echo $data->getAno();
echo "$data";
/*Erika Gato e Weverton Damascena*/
 ?>
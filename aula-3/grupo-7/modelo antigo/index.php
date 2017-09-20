<?php include("form.php");
  
  $areaQ = new Retangulo(10,20);
 
  $areaR = new Quadrado(30);
 
  $areaC = new Circulo(50);
  
  $result=$areaQ->calcularArea();
  echo " Area do Retangulo \n";
  $result=$areaR->calcularArea();
  echo " Area do Quadrado \n";
  $result=$areaC->calcularArea();
 echo " Area do Circulo \n"; 
 echo "\n";
<?php 

 require __DIR__ . "/forma.php";
 require __DIR__ . "/retangulo.php";
 require __DIR__ . "/quadrado.php";
 require __DIR__ . "/circulo.php";

#valores para Retangulo  
  $Retangulo = new Retangulo;
  
  $Retangulo->setLagura(10);
  $Retangulo->setAltura(20);

  echo "\n --- Retangulo ---";
  echo "\nResultado retangulo: ". $Retangulo->getcalcularArea();
  echo "\n ------ \n";

#Fim valores Retangulo

#Valores para Quadrado
  $Quadrado = new Quadrado; 

  $Quadrado->setLagura(30);
  $Quadrado->setAltura(40);

  echo "\n --- Quadrado ---";
  echo "\nArea do Quadrado: " . $Quadrado->getcalcularArea();
  echo "\n ------ \n";

#Valores para Circulo
  $Circulo =  new Circulo;
  $Circulo->setRaio(50);
  $Circulo->setPi(3.14);
 
  echo "\n --- Circulo ---";
  echo "\nArea do Circulo: ". $Circulo->getcalcularArea(); 
  echo "\n ------ \n";  


 #Fim valores circulo

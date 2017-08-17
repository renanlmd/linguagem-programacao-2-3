<?php include("classes/form.php");

$areaQ = new Retangulo(10,20);
$areaR = new Quadrado(30);
$areaC = new Circulo(50);

$result=$areaQ->calcularArea();
echo "\n";
$result=$areaR->calcularArea();
echo "\n";
$result=$areaC->calcularArea();
echo "\n"

<?php 

require_once __DIR__ ."/FiguraGeometrica.php";
require_once __DIR__ ."/Triangulo.php";
require_once __DIR__ ."/Quadrado.php";

$Triangulo = new Triangulo;
$Quadrado = new Quadrado;


echo "<---FiguraGeometrica-->".$Quadrado->getNomeFigura()."\n";
$Quadrado->setLado(15);
echo "Valor dos lados: ".$Quadrado->getLado();

echo "\nValor da Area: ".$Quadrado->getArea();

echo "\nValor do Perimetro: ".$Quadrado->getPerimetro();

echo "\n\n<--FiguraGeometrica-->".$Triangulo->getNomeFigura()."\n";

$Triangulo->setBase(20);
$Triangulo->setAltura(10);
$Triangulo->setLadoA(15);
$Triangulo->setLadoB(15);
$Triangulo->setLadoC(15);

echo "\nBase do Triangulo: ". $Triangulo->getBase();

echo "\nAltura do Triangulo: ". $Triangulo->getAltura();

echo "\nValor do LadoA do Triangulo: ". $Triangulo->getLadoA();

echo "\nValor do LadoB do Triangulo: ". $Triangulo->getLadoB();

echo "\nValor do LadoC do Triangulo: ". $Triangulo->getLadoC();

echo "\nValor da Area do Triangulo: ". $Triangulo->getArea();

echo "\nValor do Perimetro do Triangulo: ". $Triangulo->getPerimetro();



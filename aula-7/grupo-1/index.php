<?php

require __DIR__ ."/FiguraGeometrica.php";
require __DIR__ ."/Quadrado.php";
require __DIR__ ."/Triangulo.php";

$quadrado = new Quadrado;

$triangulo = new Triangulo;


echo "\n-------FIGURA GEOMETRICA: ".$quadrado->getNomeFigura(). "-------\n";
$quadrado->setLado(15);
echo "Valor dos lados: ". $quadrado->getLado();

echo "\n\nValor da Area da figura: ". $quadrado->getArea();

echo "\n\nValor do Perimetro da figura: ". $quadrado->getPerimetro();

echo "\n\n-------FIGURA GEOMETRICA: ".$triangulo->getNomeFigura(). "-------\n";

$triangulo->setBase(20);
$triangulo->setAltura(10);
$triangulo->setLadoA(15);
$triangulo->setLadoB(15);
$triangulo->setLadoC(15);

echo "\nBase do Triangulo: ". $triangulo->getBase();

echo "\n\nAltura do Triangulo: ". $triangulo->getAltura();

echo "\n\nValor do LadoA do Triangulo: ". $triangulo->getLadoA();

echo "\n\nValor do LadoB do Triangulo: ". $triangulo->getLadoB();

echo "\n\nValor do LadoC do Triangulo: ". $triangulo->getLadoC();

echo "\n\nValor da Area do Triangulo: ". $triangulo->getArea();

echo "\n\nValor do Perimetro do Triangulo: ". $triangulo->getPerimetro();
<?php

require __DIR__ . '/figura.php';
require __DIR__ . '/quadrado.php';
require __DIR__ . '/triangulo.php';


$novoQuadrado = new quadrado;

echo "valores quadrado";
echo "\nFigura: ". $novoQuadrado->getNomeFigura();
$novoQuadrado->setLado(30);
echo "\nLado: ". $novoQuadrado->getLado();
echo "\nValor area: ". $novoQuadrado->getArea();
echo "\nPerimentro: ". $novoQuadrado->getPerimentro();

echo "\n";
$novoTriangulo = new triangulo;

$novoTriangulo->setBase(20);
$novoTriangulo->setAltura(10);
$novoTriangulo->setLadoA(5);
$novoTriangulo->setLadoB(5);
$novoTriangulo->setLadoC(5);

echo "Valores Triangulo";
echo "\nFigura: ". $novoTriangulo->getNomeFigura();
echo "\nBase triangulo: ". $novoTriangulo->getBase();
echo "\nAltura triangulo: ". $novoTriangulo->getAltura();
echo "\nLadoA triangulo: ". $novoTriangulo->getLadoA();
echo "\nLadoB triangulo: ". $novoTriangulo->getLadoB();
echo "\nLadoC triangulo: ". $novoTriangulo->getLadoC();
echo "\nArea triangulo: ". $novoTriangulo->getArea();
echo "\nPerimentro triangulo: ". $novoTriangulo->getPerimentro();
echo "\n ------- \n";

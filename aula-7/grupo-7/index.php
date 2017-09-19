<?php

require __DIR__ . '/figurageo.php';
require __DIR__ . '/quadrado.php';
require __DIR__ . '/triangulo.php';

#valores para quadrado
$novoQuadrado = new quadrado;

echo " ----- valores quadrado ----";
echo "\nFigura: ". $novoQuadrado->getNomeFigura();
$novoQuadrado->setLado(30);
echo "\nLado: ". $novoQuadrado->getLado();
echo "\nValor area: ". $novoQuadrado->getArea();
echo "\nPerimentro: ". $novoQuadrado->getPerimentro();

echo "\n  -------\n";
#fim valores quadrado

#valores triangulo
$novoTriangulo = new triangulo;

$novoTriangulo->setBase(12);
$novoTriangulo->setAltura(8);
$novoTriangulo->setLadoA(5);
$novoTriangulo->setLadoB(5);
$novoTriangulo->setLadoC(5);

echo " ---- Valores Triangulo ----";
echo "\nFigura: ". $novoTriangulo->getNomeFigura();
echo "\nBase triangulo: ". $novoTriangulo->getBase();
echo "\nAltura triangulo: ". $novoTriangulo->getAltura();
echo "\nLadoA triangulo: ". $novoTriangulo->getLadoA();
echo "\nLadoB triangulo: ". $novoTriangulo->getLadoB();
echo "\nLadoC triangulo: ". $novoTriangulo->getLadoC();
echo "\nArea triangulo: ". $novoTriangulo->getArea();
echo "\nPerimentro triangulo: ". $novoTriangulo->getPerimentro();
echo "\n ------- \n";
#fim valores triangulo
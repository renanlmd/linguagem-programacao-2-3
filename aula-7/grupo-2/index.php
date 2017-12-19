<?php

require_once __DIR__ ."/FormaGeometrica.php";
require_once __DIR__ ."/Triangulo.php";
require_once __DIR__ ."/Quadrado.php";

$triangulo = new Triangulo;
$quadrado = new Quadrado;


echo "------- Forma Geometrica -------\n".$quadrado->getNomeForma()."\n";
$quadrado->setLado(15)."\n";
echo " # Valor dos lados: ".$quadrado->getLado();

echo "\n # Valor da Area: ".$quadrado->getArea();

echo "\n # Valor do Perimetro: ".$quadrado->getPerimetro();

echo "\n\n------- Forma Geometrica -------\n".$triangulo->getNomeForma()."\n";

$triangulo->setBase(25);
$triangulo->setAltura(12);
$triangulo->setLadoA(14);
$triangulo->setLadoB(14);
$triangulo->setLadoC(14);

echo " # Base do Triangulo: ".$triangulo->getBase();

echo "\n # Altura do Triangulo: ".$triangulo->getAltura();

echo "\n # Valor do LadoA do Triangulo: ".$triangulo->getLadoA();

echo "\n # Valor do LadoB do Triangulo: ".$triangulo->getLadoB();

echo "\n # Valor do LadoC do Triangulo: ".$triangulo->getLadoC();

echo "\n # Valor da Area do Triangulo: ".$triangulo->getArea();

echo "\n # Valor do Perimetro do Triangulo: ".$triangulo->getPerimetro()."\n\n";

<?php

require __DIR__."/interfaceFG.php";
require __DIR__."/quadrado.php";
require __DIR__."/triangulo.php";

use Grupo_08\Q2Aula7\Triangulo as T;
use Grupo_08\Q2Aula7\Quadrado as Q;

$q1 = new Q();
$q1->setLado(5);

$n = $q1->getNomeFigura();
$a = $q1->getArea();
$p = $q1->getPerimetro();
print_r($q1);
echo "\n Nome da figura: $n\n";
echo "\n Area da figura: $a\n";
echo "\n Perimetro da figura: $p\n";

$t1 = new T();
$t1->setLadoA(5);
$t1->setLadoB(20);
$t1->setLadoC(34);
$t1->setAltura(2);
$t1->setBase(3);

$n = $t1->getNomeFigura();
$a = $t1->getArea();
$p = $t1->getPerimetro();
print_r($t1);
echo "\n Nome da figura: $n\n";
echo "\n Area da figura: $a\n";
echo "\n Perimetro da figura: $p\n";

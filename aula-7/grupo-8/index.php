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
echo "\n\n Nome da figura: $n\n";
echo "\n Area da figura: $a\n";
echo "\n Perimetro da figura: $p\n\n";

$t1 = new T();
$t1->setLadoA(15);
$t1->setLadoB(15);
$t1->setLadoC(15);
$t1->setAltura(10);
$t1->setBase(15);

$n = $t1->getNomeFigura();
$a = $t1->getArea();
$p = $t1->getPerimetro();
print_r($t1);
echo "\n Nome da figura: $n\n";
echo "\n Area da figura: $a\n";
echo "\n Perimetro da figura: $p\n";

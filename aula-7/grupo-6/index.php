<?php
/*
:six: Grupo 6 - [Americo Rodrigues - Diogo Dias - Christian Ferreira]

Situação
--------|
:-1:

Crie uma classe calculadora. Esta classe deve implementar as
operações básicas:
1. soma
2. subtracao
3. divisao
4. multiplicacao

Utilizando o conceito de herança crie uma classe chamada **CalculadoraCientifica** que implementa o seguinte cálculo: 

1. raizQuadrada

**Crie um arquivo index.php** para testar a execução. Crie um objeto ```Calculadora```, e execute as operações:
1. 10 + 35
2. 40 - 10
3. 20 * 10
4. 10 / 2

Crie um objeto **CalculadoraCientifica** e teste os métodos:
1. raizQuadrada(9) 
*/

require "classes/classes.php";
$calculadora= new Calculadora();

$calculadora->setSoma(2,3);
echo $calculadora->getSoma()."\n";


$calculadora->setSub(10,3);
echo $calculadora->getSub()."\n";

$calculadora->setMult(5,5);
echo $calculadora->getMult()."\n";

$calculadora->setDiv(10,2);
echo $calculadora->getDiv()."\n";


$calculadoracientifica = new CalculadoraCientifica();
$num=30;
$resultado=$calculadoracientifica->setRaizQuadrada($num);
echo "Raiz quadrada de ".$num." = ".$calculadoracientifica->getRaizQuadrada() ."\n\n\n";



#--------------------------------------

	$quadrado = new Quadrado;
	$triangulo = new Triangulo;
	echo "Area do ".$quadrado->getNomeFigura();

	
	$quadrado->setLado(2);
	echo "\n\nLaterais da figura: ". $quadrado->getLado();
	echo "\nArea da figura: ". $quadrado->getArea();
	echo "\nPerimetro da figura: ". $quadrado->getPerimetro();
	#-----------------------------

	$triangulo->setBase(64);
	$triangulo->setAltura(32);
	$triangulo->setLadoA(60);
	$triangulo->setLadoB(88);
	$triangulo->setLadoC(50);
	echo "\n\nArea do ".$triangulo->getNomeFigura();;
	echo "\nBase da figura: ". $triangulo->getBase();
	echo "\nAltura da figura: ". $triangulo->getAltura();
	echo "\nTamanho do Lado A da figura: ". $triangulo->getLadoA();
	echo "\nTamanho do Lado B da figura: ". $triangulo->getLadoB();
	echo "\nTamanho do Lado C da figura: ". $triangulo->getLadoC();

	echo "\nArea da figura: ". $triangulo->getArea();
	echo "\nPerimetro da figura: ". $triangulo->getPerimetro();

	?>
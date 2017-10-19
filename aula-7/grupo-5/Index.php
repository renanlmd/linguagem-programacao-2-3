<?php 
	require __DIR__ . '/FiguraGeometrica.php';
	require __DIR__ . '/Triangulo.php';	
	require __DIR__ . '/Quadrado.php';

	
	$FigTriangulo = new Triangulo;


	$FigTriangulo->setBase(80);
	$FigTriangulo->setAltura(120);
	$FigTriangulo->setLadoA(100);
	$FigTriangulo->setLadoB(100);
	$FigTriangulo->setLadoC(100);

	echo "\nFigura: ".  $FigTriangulo->getNomeFigura();
	echo "\nBase: " . $FigTriangulo->getBase();
	echo "\nAltura: " . $FigTriangulo->getAltura();
	echo "\nLadoA: " . $FigTriangulo->getLadoA();
	echo "\nLadoB: " . $FigTriangulo->getLadoB();
	echo "\nLadoC: " . $FigTriangulo->getLadoC();
	echo "\nArea: " . $FigTriangulo->getArea();
	echo "\nPerimentro: " . $FigTriangulo->getPerimentro();


	$FigQuadrado = new Quadrado;

	$FigQuadrado->setLado(100);

    echo "\nFigura: ".  $FigQuadrado->getNomeFigura();
    echo "\nLado: " . $FigQuadrado->getLado();
	echo "\nArea: " . $FigQuadrado->getArea(); 
	echo "\nPerimentro: " . $FigQuadrado->getPerimentro();




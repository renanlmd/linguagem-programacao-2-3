<?php
/*
# :four: Grupo 4 - [Cleudayanne Barbosa, Janaina Cardoso, Roger Silva]

Situação
--------|
:-1:

A fim de representar empregados em uma firma, crie uma classe chamada ```Empregado``` que
inclui as três informações a seguir como atributos:

1. um primeiro nome;
2. um sobrenome;
3. um salário mensal;

Crie um método
1. calculaAumento($porcentagem)

**Sua classe deve ter um construtor que inicializa os três atributos**.

 Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0. 

 **Escreva um arquivo index.php de teste** que cria 3 empregados, e fornece um aumento de **5%**, **10%** e **15%** respectivamente e exiba o salário de cada empregado.
*/
	require "classes.php";
	$empregado1 = new Empregado;
	$empregado2 = new Empregado;
	$empregado3 = new Empregado;
	#---------

	$empregado1->setNome("Dayanne");
	$empregado1->setSnome("Barbosa");
	$empregado1->setSalario_men(3000);
	$empregado1->pagamento(5);


	#---------

	$empregado2->setNome("Janaina");
	$empregado2->setSnome("Cardoso");
	$empregado2->setSalario_men(3000);
	$empregado2->pagamento(10);
	#---------

	$empregado3->setNome("Roger");
	$empregado3->setSnome("Silva");
	$empregado3->setSalario_men(3000);
	$empregado3->pagamento(15);

	echo "$empregado1\n\n";
	echo "$empregado2\n\n";
	echo "$empregado3\n\n\n\n";



	
	$figura1 = new Quadrado;
	$figura2 = new Triangulo;
	echo "Area do ".$figura1->getNomeFigura();

	
	$figura1->setLado(2);
	echo "\n\nLaterais da figura: ". $figura1->getLado();
	echo "\nArea da figura: ". $figura1->getArea();
	echo "\nPerimetro da figura: ". $figura1->getPerimetro();
	#-----------------------------

	$figura2->setBase(5);
	$figura2->setAltura(9);
	$figura2->setLadoA(8);
	$figura2->setLadoB(7);
	$figura2->setLadoC(10);
	echo "\n\nArea do ".$figura2->getNomeFigura();;
	echo "\nBase da figura: ". $figura2->getBase();
	echo "\nAltura da figura: ". $figura2->getAltura();
	echo "\nTamanho do Lado A da figura: ". $figura2->getLadoA();
	echo "\nTamanho do Lado B da figura: ". $figura2->getLadoB();
	echo "\nTamanho do Lado C da figura: ". $figura2->getLadoC();

	echo "\nArea da figura: ". $figura2->getArea();
	echo "\nPerimetro da figura: ". $figura2->getPerimetro();






?>
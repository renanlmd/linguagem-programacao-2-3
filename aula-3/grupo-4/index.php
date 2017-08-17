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
	
	$empregado1 = new Empregado("Dayanne","Barbosa",3000,5);
	echo "$empregado1";
	
	$empregado2 = new Empregado("Janaina","Cardoso",3000,10);
	echo "$empregado2";

	$empregado3 = new Empregado("Roger"," Silva",3000,15);
	echo "$empregado3";

?>
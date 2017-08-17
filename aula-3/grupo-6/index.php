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

$resultado=$calculadora->soma(2,3);
echo $resultado."\n";

$resultado=$calculadora->sub(10,3);
echo $resultado."\n";

$resultado=$calculadora->mult(5,5);
echo $resultado."\n";

$resultado=$calculadora->div(10,2);
echo $resultado."\n";

$calculadoracientifica = new CalculadoraCientifica();
$resultado=$calculadoracientifica->raizQuadrada(9);
echo "Raiz quadrada de ".pow($resultado,2)." = $resultado \n";

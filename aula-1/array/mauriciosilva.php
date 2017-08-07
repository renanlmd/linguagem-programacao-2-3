<?php

/**
 * Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que relaciona *
 * valores para chaves. Este tipo é otimizado de várias maneiras, então você pode *
 * usá-lo como um array real, ou uma lista (vetor), hashtable (que é uma implementação
 * de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Como você pode ter
 * outro array PHP como um valor, você pode facilmente simular árvores.
 *
 * fonte: http://php.net/manual/pt_BR/language.types.array.php
 */
echo "paulo moura";
$array = [
  "a", "b", "c", "d"
];

$array_associativo = [
  1 => "Pedro",
  2 => "Paulo",
  3 => "João",
  4 => "Henrique"
];

$array_associativo_chave_string = [
	"aluno-1" => "Pedro",
	"professor" => "Paulo",
	"coordenador" => "Sergio",
	"faculdade" => "META"
];

#Exibe na tela o array
var_dump($array);

#Exibe na tela o array associativo
var_dump($array_associativo);

#Exibe na tela o array associativo com chaves string
var_dump($array_associativo_chave_string);

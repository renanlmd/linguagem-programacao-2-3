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

$lista = [
	"Hoje",
	"Quem",
	"Paga",
	"Pizza",
	"São",
	"Os",
	"Alunos"
];

foreach($lista as $palavra) {
	echo "$palavra\n";
}
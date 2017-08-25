<?php
#
# && é o operador AND no PHP, é utilizado para avaliar as expressões (1 == 1) e (1 < 0).
# Quando usado com o if, o bloco apenas será executado se ambas as condições forem "true"
#
# No caso a seguir, o bloco else será executado.
# Já que: 1 não é menor que 0 - (1 < 0)
#
if(1 == 1 && 1 < 0) {
	echo "Condição verdadeira\n";
} else {
	echo "Condição falsa, executa o block else\n";
}
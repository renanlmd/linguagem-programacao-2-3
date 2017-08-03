<?php
#
# Operadores de comparação como o próprio nome já diz compara dois valores retornando 
# verdadeiro (TRUE) ou falso (FALSE).
#

if(10 > 2) {
	echo "Dez é maior que dois\n";
}

if(10 == 10) {
	echo "Dez é igual a dez\n";
}

#Vai imprimir 1, ou seja, true.
# 1 é interpretado com true no PHP

echo 5 == 5;
echo "\n";


#Não vai imprimir nada.
#String vazia é interpretada com false no PHP
echo 4 < 3;
echo "\n";
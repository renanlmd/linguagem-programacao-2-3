<?php
#
# As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da 
# variável. Os nomes de variável são case-sensitive.
#
# Nomes de variável seguem as mesmas regras como outros rótulos no PHP. Um nome de 
# variável válido inicia-se com uma letra ou sublinhado, seguido de qualquer número de 
# letras, números ou sublinhados.
# 
# Variáveis inválidas:
# 		$2_teste = 2;
# 		$@_teste = 'a';
#
#
#
#

$cidade = "Macapá";
$_estado = "Amapá";
$__bairro = "Centro";
$cep = 68908000;

$array = [110, 250, 840];

echo "$cidade\n";
echo "$_estado\n";
echo "$__bairro\n";
echo "$cep\n";

#Acessando o item na posição 0 = 110
echo $array[0];
echo "\n";
#Acessando o item na posição 1 = 250
echo $array[1];
echo "\n";
#Acessando o item na posição 2 = 840
echo $array[2];
echo "\n";
<?php

#
# Concatenar, é basicamente juntar strings em uma só
#

$cidade = "Macapá";
$_estado = "Amapá";
$__bairro = "Centro";
$cep = 68908000;

$endereco = $_estado . ", " . $cidade . ", " . $__bairro . ", " . $cep . "\n";

$endereco_interpolacao = "$_estado, $cidade, $__bairro, $cep \n";

echo $endereco;
echo $endereco_interpolacao;
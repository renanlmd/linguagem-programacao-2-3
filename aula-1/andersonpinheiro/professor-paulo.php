<?php

#
# Concatenar, é basicamente juntar strings em uma só
#

$nome = "Anderson";
$cidade = "Santana";
$_estado = "Amapá";
$__bairro = "Remédio";
$cep = 68927048;

$endereco = $_estado . ", " . $cidade . ", " . $__bairro . ", " . $cep . "\n";

$endereco_interpolacao = "$_estado, $cidade, $__bairro, $cep \n";

echo $endereco;
echo $endereco_interpolacao;
echo "anderson";
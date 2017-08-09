<?php

# Concatenar, é basicamente juntar strings em uma só

$nome = "Anderson";
$cidade = "Santana";
$_estado = "Amapá";
$__bairro = "Remédio";
$cep = 68927048;

echo "LINGUAGEM DE PROGRAMAÇÃO PARA SERVIDOR II E III <BR>";
$endereco = $nome . ", " . $_estado . ", " . $cidade . ", " . $__bairro . ", " . $cep . "\n";
echo $endereco;

?>
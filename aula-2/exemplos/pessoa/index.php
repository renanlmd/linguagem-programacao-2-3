<?php

require __DIR__ . '/Pessoa.php';

$pessoa = new Pessoa;

$pessoa->andar();

$pessoa->andar();

$pessoa->andar();

$pessoa->andar();

echo "Metros percorridos: " . $pessoa->metrosPercorrido . "\n";
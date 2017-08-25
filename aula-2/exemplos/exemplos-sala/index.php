<?php

require 'Pessoa.php';
require 'Homem.php';
require 'Conta.php';

$homem = new Homem();

var_dump($homem);
$homem->comer();
echo "\n";
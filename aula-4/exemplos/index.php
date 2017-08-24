<?php

require __DIR__ . '/Funcionario.php';
require __DIR__ . '/Gerente.php';
require __DIR__ . '/Diretor.php';

$diretor = new Diretor;

$diretor->setSalario(100);
var_dump($diretor->getBonificacao());
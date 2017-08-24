<?php

require __DIR__ . '/Funcionario.php';
require __DIR__ . '/Gerente.php';

$gerente = new Gerente();

var_dump($gerente->getBonificacao());
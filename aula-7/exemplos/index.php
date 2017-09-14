<?php

require __DIR__ . '/Conta.php';
require __DIR__ . '/ContaCorrente.php';
require __DIR__ . '/ContaPoupanca.php';
require __DIR__ . '/GeradorDeExtrato.php';

$minhaconta = new ContaCorrente;

$geradorExtrato = new GeradorDeExtrato;

echo "---- Conta Corrente ---- \n";

$minhaconta->depositar(150);

$minhaconta->depositar(50);

$minhaconta->sacar(150);

$geradorExtrato->gerarExtrato($minhaconta);

echo "\n";


/**
 * Conta Poupança
 */

echo "---- Conta Poupança ---- \n";

$contapoupanca = new ContaPoupanca;

$contapoupanca->depositar(500);

$contapoupanca->depositar(60);

$contapoupanca->sacar(150);

$geradorExtrato->gerarExtrato($contapoupanca);

echo "\n";
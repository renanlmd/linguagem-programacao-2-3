<?php

/**
 * O __DIR__ é uma constante padrão do php.
 * Ele aponta para o diretório em que o arquivo está.
 * Leia mais sobre o dir, aqui:
 * http://php.net/manual/pt_BR/language.constants.predefined.php
 */

/**
 * ContaCorrente começa com $saldo = 0
 * Chamamos o depositar()
 * Em seguida consultamos o saldo. Que é igual à 10000
 */
require __DIR__ . '/Conta.php';
require __DIR__ . '/ContaCorrente.php';

$conta = new ContaCorrente();

echo "Saldo Inicial: " . $conta->consultarSaldo() . "\n";

$conta->depositar(10000);

echo "Saldo: " . $conta->consultarSaldo() . "\n";

echo $conta->sacar(150);

echo "Saldo: " . $conta->consultarSaldo() . "\n";
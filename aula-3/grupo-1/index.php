<?php


require  __DIR__ ."/Conta.php";
require __DIR__ ."/ContaCorrente.php";

$contaCorrente = new ContaCorrente();
$conta = new Conta();

$valorDeposito = 10000;



echo "\nProprietario da conta: ". $conta->proprietarioConta(). "\n";
echo "Saldo: " . $contaCorrente->consultarSaldo() . "\n\n\n";



echo "Valor do deposito: ". number_format($valorDeposito, 3, ',', '.'). "\n";
$contaCorrente->deposito($valorDeposito);


echo "Saldo atual: " . number_format($contaCorrente->consultarSaldo(), 3, ',', '.') . "\n";

$valorSaque = 500000;
$contaCorrente->sacar($valorSaque);

echo "\n\nValor do saque: ". $valorSaque."\n";


echo "Resultado do saque: ". $contaCorrente->consultarSaldo() . "\n";




echo "Saldo atual: " . $contaCorrente->consultarSaldo() . "\n";

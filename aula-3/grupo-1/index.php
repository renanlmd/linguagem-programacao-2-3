<?php


require __DIR__ ."/TipoConta.php";
require  __DIR__ ."/Conta.php";
require __DIR__ ."/ContaCorrente.php";

$conta = new Conta;
$contaCorrente = new ContaCorrente;

$conta->setProprietarioConta("Renan de Almeida");
$conta->setNumeroConta("00009537");
$conta->setTipoConta("Conta Poupança");
echo "\nProprietario da conta: ". $conta->getProprietarioConta(). "\n";
echo "\nNumero da conta: ". $conta->getNumeroConta();
echo "\nTipo de Conta: ". $conta->getTipoConta(). "\n";
echo "Saldo: " . $conta->getConsultarSaldo() . "\n\n\n";



echo "Valor do deposito: ". number_format(10000, 3, ',', '.'). "\n";
$conta->Deposito(10000);


echo "\nSaldo atual: " . number_format($conta->getConsultarSaldo(), 3, ',', '.') . "\n";

$valorSaque = 20000;
$conta->Sacar($valorSaque);

echo "\n\nValor do saque: ". number_format($valorSaque, 3, ',', '.')."\n";


echo "Resultado do saque: ". number_format($conta->getConsultarSaldo(), 3, ',', '.') . "\n";


echo "Saldo atual: " . number_format($conta->getConsultarSaldo(), 3, ',', '.') . "\n";

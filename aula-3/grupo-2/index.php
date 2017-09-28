<?php
	require 'Energia.php';
	require 'iLampada.php';
	require 'Lampada.php';


	$lampada[] = new Lampada(false);
	$lampada[] = new Lampada(true);

	echo "\nLampada 1:";

	echo "\nA Lampada 1 ";
	echo $lampada[0]->getObserva()."\n";

	$lampada[0]->setLiga();

	echo "\nA Lampada 1 ";
	echo $lampada[0]->getObserva()."\n";

	$lampada[0]->setDesliga();

	echo "\nA Lampada 1 ";
	echo $lampada[0]->getObserva()."\n";

	echo "\nLampada 2:";

	echo "\nA Lampada 2 ";
	echo $lampada[1]->getObserva()."\n";

	$lampada[1]->setLiga();

	echo "\nA Lampada 2 ";
	echo $lampada[1]->getObserva()."\n";

	$lampada[1]->setDesliga();

	echo "\nA Lampada 2 ";
	echo $lampada[1]->getObserva()."\n";
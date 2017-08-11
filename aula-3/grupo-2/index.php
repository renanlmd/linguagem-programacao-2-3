<?php
	require 'lampada.php';

	$lampada[] = new Lampada(false);
	$lampada[] = new Lampada(true);

	var_dump($lampada);

	echo "\nA Lampada 1 ";
	echo $lampada[0]->getObserva();

	echo "\nA Lampada 2 ";
	echo $lampada[1]->getObserva();
	
	$lampada[0]->setLiga();
	$lampada[1]->setDesliga();

	echo "\nA Lampada 1 ";
	echo $lampada[0]->getObserva();

	echo "\nA Lampada 2 ";
	echo $lampada[1]->getObserva();
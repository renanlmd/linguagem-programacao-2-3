<?php

	include("contato.php");

	$agenda = new Agenda();

	$contato1 = new Contato("João Victor","joaovcsantosap@gmail.com");
	$contato2 = new Contato("Erison","erisonsantos@gmail.com");
	$contato3 = new Contato("Joas","joasribeiro@gmail.com");

	$n1 = $contato1->getNome();
	$e1 = $contato1->getEmail();

	$n2 = $contato2->getNome();
	$e2 = $contato2->getEmail();

	$n3 = $contato3->getNome();
	$e3 = $contato3->getEmail();

	$agenda->novoContato($n1, $e1);
	$agenda->novoContato($n2, $e2);
	$agenda->novoContato($n3, $e3);

	$busca = $agenda->buscaContato("erison");

	var_dump($agenda);
	echo "<hr>";
	var_dump($contato1);
	echo "<hr>";
	var_dump($contato2);
	echo "<hr>";
	var_dump($contato3);

	echo $busca;

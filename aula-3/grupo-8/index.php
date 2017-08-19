<?php

	include("contato.php");

	$agenda = new Agenda();

	$contato1 = new Contato("Joao","joaovcsantosap@gmail.com");
	$contato2 = new Contato("Erison","erisonsantos@gmail.com");
	$contato2 = new Contato("Erison","erisonsantos111@gmail.com");

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


	$busca = $agenda->buscaContato("joao");

	$apaga = $agenda->apagaContato($busca);

	#$apaga = $agenda->apagaContato("joas");

	// AREA DE EXIBIÇÃO
	var_dump($agenda);
	echo "____________________________________________________\n";
	var_dump($contato1);
	echo "____________________________________________________\n";
	var_dump($contato2);
	echo "____________________________________________________\n";
	var_dump($contato3);

	if (@$busca) {
		if (is_array($busca)) {
			echo "\n # RESULTATDO DA BUSCA # \n";
			echo "\nNome: [".$busca[0]."]\n";
			echo "\nEmail: [".$busca[1]."]\n";
		}else {
			echo $busca;
		}
	}

	if (@$apaga) {
		echo $apaga;
	}elseif (@$apaga) {

	}

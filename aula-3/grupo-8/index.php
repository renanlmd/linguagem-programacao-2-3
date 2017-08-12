<?php 

	require __DIR__ . '/contato.php';
	require __DIR__ . '/agenda.php';

	$agenda = new Agenda ('Nome','email');
	$contato = new Contato ('Erison','erisonsantos111@gmail.com');

	echo "{$contato->GetNome()} - {$email->GetEmail()}";
	

?>
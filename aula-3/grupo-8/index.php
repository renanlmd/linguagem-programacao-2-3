<?php

  include_once("interfaceAgenda.php");
  include_once("agenda.php");
  include_once("contato.php");

  use Grupo_8\Aula3\Agenda as Agenda;
  use Grupo_8\Aula3\Contato as Contato;

  $agenda = new Agenda();

  //  Contato 1
  $c1 = new Contato("Joao Victor","joaovcsantosap@gmail.com");
  $n1 = $c1->getNome();
  $e1 = $c1->getEmail();
  //  Contato 2
  $c2 = new Contato("Erison Santos","erisonsantosap@gmail.com");
  $n2 = $c2->getNome();
  $e2 = $c2->getEmail();
  //  Contato 3
  $c3 = new Contato("Joas Ribeiro","joasribeiroap@gmail.com");
  $n3 = $c3->getNome();
  $e3 = $c3->getEmail();

  //  Adicionado Contatos
  $agenda->add($n1,$e1);
  $agenda->add($n2,$e2);
  $agenda->add($n3,$e3);

  //  Buscando um contato
  $busca = $agenda->busca($n2);

  #print_r($c1);
  echo "\n%%%%%%%%%%%%%%%%%%%%%%%%%%//  Agenda Antes  //%%%%%%%%%%%%%%%%%%%%%%%%%%%\n";
  print_r($agenda);
  echo "\n%%%%%%%%%%%%%%%%%%%%%%%%%//  Buscando um contato  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%\n";
  if ($busca)
  {
    echo "\nContato:\n Nome-> ".$busca[0]."\n Email-> ".$busca[1]."\n";
  }
  else
  {
    echo "FALSE\n";
  }

  //  Removendo um contato
  $remove = $agenda->remove($n1);

  echo "\n%%%%%%%%%%%%%%%%%%%%%%%%//  Removendo um contato  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%\n";
  if ($remove)
  {
    echo "\n Contato removido!\n";
  }
  else
  {
    echo "FALSE\n";
  }
  echo "\n%%%%%%%%%%%%%%%%%%%%%%%%%%//  Agenda Dopis  //%%%%%%%%%%%%%%%%%%%%%%%%%%%\n";
  print_r($agenda);

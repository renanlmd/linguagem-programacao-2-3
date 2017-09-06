<?php

require __DIR__ . '/Material.php';
require __DIR__ . '/Datashow.php';
require __DIR__ . '/Onibus.php';
require __DIR__ . '/Pincel.php';
require __DIR__ . '/Professor.php';
require __DIR__ . '/Funcionario.php';

/**
 * Instanciamos um ônibus
 */
$onibusDaFaculdade = new Onibus;

/**
 * Instaciamos vários pinceis, cada um em uma variável
 */
$pincel1 = new Pincel;
$pincel2 = new Pincel;
$pincel3 = new Pincel;

/**
 * Instanciamos vários datashows
 * @var Datashow
 */
$datashow1 = new Datashow;
$datashow2 = new Datashow;

/**
 * Preenchemos os atributos do onibus
 */
$onibusDaFaculdade->setDescricao('ONIBUS MERCEDEZ');
$onibusDaFaculdade->setTipo('ONIBUS');
$onibusDaFaculdade->setPatrimonio('O-0002');
$onibusDaFaculdade->setEstado('BOM');

/**
 * Preenchemos os atributos do $pincel1
 */
$pincel1->setDescricao('PINCEL PILOT');
$pincel1->setTipo('PINCEL');
$pincel1->setPatrimonio('P1-0001');
$pincel1->setEstado('COM PROBLEMA');

/**
 * Preenchemos os atributos do $pincel2
 */
$pincel2->setDescricao('PINCEL BIC');
$pincel2->setTipo('PINCEL');
$pincel2->setPatrimonio('P1-0002');
$pincel2->setEstado('BOM');

/**
 * Preenchemos os atributos do $pincel3
 */
$pincel3->setDescricao('PINCEL PILOT');
$pincel3->setTipo('PINCEL');
$pincel3->setPatrimonio('P1-0003');
$pincel3->setEstado('BOM');

/**
 * Preenchemos os atributos do $datashow1
 */
$datashow1->setDescricao('DATASHOW PANASONIC');
$datashow1->setTipo('DATASHOW');
$datashow1->setPatrimonio('D-0001');
$datashow1->setEstado('BOM');

/**
 * Preenchemos os atributos do $datashow2
 */
$datashow2->setDescricao('DATASHOW MULTILASER');
$datashow2->setTipo('DATASHOW');
$datashow2->setPatrimonio('D-0002');
$datashow2->setEstado('BOM');

$funcionario = new Funcionario;

$profPaulo = new Professor;
$profPaulo->setNome('PAULO SILVA');

$funcionario->emprestar($profPaulo, $pincel2);
$funcionario->emprestar($profPaulo, $datashow1);
$funcionario->emprestar($profPaulo, $datashow2);
$funcionario->emprestar($profPaulo, $onibusDaFaculdade);

var_dump($profPaulo);
<?php
namespace Grupo_8\Aula3;

interface InAgenda
{
    public function add($n, $e);

    public function remove($n);

    public function busca($n);
}

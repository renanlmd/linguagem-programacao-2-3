<?php
namespace Grupo_8\Aula3;

class Agenda implements InAgenda
{
      protected $contatos = [];

      protected function getContatos($k)
      {
        return $this->contatos[$k];
      }

      public function add($n, $e)
      {
        $this->contatos[] = [$n,$e];
      }

      public function remove($n)
      {
        foreach ($this->contatos as $k => $v)
        {
          if ($n == $v[0])
          {
            unset($this->contatos[$k]);
            return true;
          }
        }
      }

      public function busca($n)
      {
        foreach ($this->contatos as $k => $v)
        {
          if ($n == $v[0])
          {
            return $this->getContatos($k);
          }
        }
      }

}

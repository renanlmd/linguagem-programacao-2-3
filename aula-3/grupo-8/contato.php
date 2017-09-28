<?php
namespace Grupo_8\Aula3;
/**
 * As variavei '$n' e '$e' representam respectivamente
 * os atributos 'nome' e 'email'.
 */

class Contato
{
    protected $nome;
    protected $email;

    public function __construct($n,$e)
    {
      $this->nome = $n;
      $this->email = $e;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->nome = $e;
    }

}

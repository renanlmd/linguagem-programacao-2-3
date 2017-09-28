<?php
namespace Grupo_08\Q2Aula7;

class Quadrado implements FiguraGeometrica
{
    protected $nomeFigura = "Quadrado";
    protected $lado;

    public function getLado()
    {
      return $this->lado;
    }

    public function setLado($lado)
    {
      $this->lado = $lado;
    }

    public function getArea()
    {
      return $this->calcArea();
    }

    public function getPerimetro()
    {
      return $this->calcPerimetro();
    }

    public function getNomeFigura()
    {
      return $this->nomeFigura;
    }

    public function calcArea()
    {
      $r = $this->lado * $this->lado;
      return $r;
    }

    protected function calcPerimetro()
    {
      $r = $this->lado * 4;
      return $r;
    }
}

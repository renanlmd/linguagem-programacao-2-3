<?php
// Grupo 08 Erison, Joas, João.
namespace Grupo_08\Q2Aula7;

class Triangulo implements FiguraGeometrica
{
    protected $nomeFigura = "Triangulo";
    protected $base;
    protected $altura;
    protected $ladoA;
    protected $ladoB;
    protected $ladoC;

    public function getBase()
    {
      return $this->base;
    }
    public function setBase($base)
    {
      $this->base = $base;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
      $this->altura = $altura;
    }
    public function getLadoA()
    {
      return $this->ladoA;
    }
    public function setLadoA($ladoA)
    {
      $this->ladoA = $ladoA;
    }
    public function getLadoB()
    {
      return $this->ladoB;
    }
    public function setLadoB($ladoB)
    {
      $this->ladoB = $ladoB;
    }
    public function getLadoC()
    {
      return $this->ladoC;
    }
    public function setLadoC($ladoC)
    {
      $this->ladoC = $ladoC;
    }

    public function getNomeFigura()
    {
      return $this->nomeFigura;
    }

    public function getArea()
    {
      return $this->calcArea();
    }

    public function getPerimetro()
    {
      return $this->calcPerimetro();
    }

    protected function calcArea()
    {
      $r = ($this->base * $this->altura) / 2;
      return $r;
    }

    protected function calcPerimetro()
    {
      $r = $this->ladoA + $this->ladoB + $this->ladoC;
      return $r;
    }
}

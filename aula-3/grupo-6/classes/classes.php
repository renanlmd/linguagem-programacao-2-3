<?php 


class Calculadora{

  private $result;




 public function soma($a,$b){
$result=$a + $b;
return $result;
}
public function sub($a,$b){
$result=$a-$b;
return $result;
}
public function mult($a,$b){
$result=$a * $b;
return $result;
}
public function div($a,$b){
$result=$a / $b;
return $result;

}


}
class CalculadoraCientifica extends Calculadora{

		public function raizQuadrada($a){

			$result=pow($a ,1/2);
			return $result;
		}








	}


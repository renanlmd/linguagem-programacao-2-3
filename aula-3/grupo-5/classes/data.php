<?php 
class Data
{
			private $data;
			private $dia;
			private $mes;
			private $ano;

		public function __construct($dat){
			$this->data=$dat;
			$dat = explode("/", $dat);
			$this->dia=$dat[0];
			$this->mes=$dat[1];
			$this->ano=$dat[2];
		}

		private function implodedata(){
			$dat[0]=$this->dia;
			$dat[1]=$this->mes;
			$dat[2]=$this->ano;
			$this->data=implode("/", $dat);
		}
		private function valida(){

			$validade=checkdate($this->mes, $this->dia, $this->ano);
			if($validade==true){
				return null;
			}else{
				return "Data invalida"."\n";
			}
		}



		public function setDia($dia){

			$this->dia=$dia;
			$result=$this->valida();
		}

		public function setMes($mes){

			$this->mes=$mes;
			$result=$this->valida();
		}

		public function setAno($ano){
			$this->ano=$ano;
			$result=$this->valida();
		}


		public function getDia(){

			return $this->dia."\n";
		}

		public function getMes(){

			return  $this->mes."\n";
		}

		public function getAno(){
			return $this->ano."\n";
		}
		public function __toString(){
			$this->implodedata();
			$result=$this->valida();
			return $this->data."\n".$result;
		}

}

 ?>
<?php

	Class Lampada
	{
		protected $ligada;

		public function __construct($ligada)
		{
			$this->ligada = $ligada;
		}

		public function setLiga()
		{
			$this->ligada = true;
		}

		public function setDesliga()
		{
			$this->ligada = false;
		}

		public function getObserva()
		{
			if($this->ligada){
				echo "Está Ligada";
			} else {
				echo "Não está Ligada";
			}
		}
	}
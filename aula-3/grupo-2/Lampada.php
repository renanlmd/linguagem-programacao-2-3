<?php

	Class Lampada extends Energia implements iLampada
	{
		protected $ligada;

		public function __construct($ligada)
		{
			if (parent::WOLT == 127)
			{
				$this->ligada = $ligada;
				return true;
			}
			else
			{
				$this->ligada = false;
				return false;
			}
		}

		public function setLiga()
		{
			if (parent::WOLT == 127)
			{
				$this->ligada = true;
				return true;
			}
			else
			{
				$this->ligada = false;
				return false;
			}
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

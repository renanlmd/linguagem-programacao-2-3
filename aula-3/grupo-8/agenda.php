<?php

	class Agenda{

		protected $contatos = [];

		// ADICIONANDO UM CONTATO À MATRIZ AGENDA
		public function novocontato($n, $e){
				$this->contatos[] = [$n,$e];
		}

		// BUSCANDO UM CONTATO PELO NOME
		public function buscacontato($n){
			foreach ($this->contatos as $k => $v) {
				if (strtoupper($n) == strtoupper($v[0])){
						#$r = "\nINDICE: [$k] | NOME: [".$v[0]."] | EMAIL: [".$v[1]."]\n";
						return $this->contato[$k] = [$v[0],$v[1]];
				}
			}
			if ($n != $v[0]) {
				return $r = "Contato não existe!\n";
			}
		}

		// APAGANDO UM CONTATO PELO INDICE DO ARRAY PRINCIPAL
		public function apagacontato($n){
			if (isset($n)) {
				foreach ($this->contatos as $k => $v) {
					if ($n == $v[0]) {
						unset($this->contatos[$k]);
					}
				}
			}else {
				echo "\nFaça a busca para poder apagar um contatos!\n";
			}
		}

		// EXIBE A AGENDA
		public function getcontato(){
			return $this->contatos;
		}

}

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
						return $this->contato[$k] = $v[0];
				}
			}
			if ($n != $v[0]) {
				return $r = "Contato não existe!\n";
			}
		}

		// APAGANDO UM CONTATO PELO INDICE DO ARRAY PRINCIPAL
		public function apagacontato($n){
			$nome = strtoupper($n);
			if (isset($nome)) {
				foreach ($this->contatos as $k => $v) {
					if ($nome == strtoupper($v[0])) {
						@$en = strtoupper($v[0]);
						unset($this->contatos[$k]);
					}
				}
				if ($nome != @$en) {
					return $r = "Você não pode apagar um contato que não existe!\n";
				}
			}
		}

		// EXIBE A AGENDA
		public function getcontato(){
			return $this->contatos;
		}

}

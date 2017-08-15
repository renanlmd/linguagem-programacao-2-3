<?php
	class Agenda{

		protected $contato = [];

		// ADICIONANDO UM CONTATO À MATRIZ AGENDA
		public function novoContato($n, $e){
				$this->contato[] = [$n,$e];
		}

		// BUSCANDO UM CONTATO PELO NOME
		public function buscaContato($n){
			foreach ($this->contato as $k => $v) {
				if (strtoupper($n) == strtoupper($v[0])){
						$r = "\nINDICE: [$k] | NOME: [".$v[0]."] | EMAIL: [".$v[1]."]\n";
						return $r;
				}
			}
		}

		// APAGANDO UM CONTATO PELO INDICE DO ARRAY PRINCIPAL
		public function apagaContato($k){
			if (isset($k)) {
				unset($this->contato[$k]);
			}else {
				echo "\nFaça a busca para poder apagar um contato!\n";
			}
		}

		// EXIBE A AGENDA
		public function getContato(){
			return $this->contato;
		}

}

<?php

class Funcionario
{
	public function emprestar(Professor $prof, Material $mat)
	{
		/**
		 * O funcionário deve verificar o estado do material no momento do empréstimo
		 * 		Se o material estiver bom, segue a operação de empréstimo, senão, cancela
		 */

		if($mat->getEstado() == 'BOM') {

			if($this->autorizaEmprestimo($prof, $mat)) {
				return $prof->adicionarMaterial($mat);
			} else {
				return false;
			}

		} else {

			/**
			 * Se o material estiver com problema, então cancela a operação e retorna false
			 */
			
			return false;
		}
	}

	protected function autorizaEmprestimo($professor, $material)
	{
		$listaMateriais = $professor->getListaMateriais();

		foreach ($listaMateriais as $mat) {
			if ($material->getTipo() == 'DATASHOW') {
				if ($mat->getTipo() == 'DATASHOW') {
					return false;
				}
			}
		}

		return true;
	}
}
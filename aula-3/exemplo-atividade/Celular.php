<?php

/**
* 
*/
class Celular extends Eletronico
{
	/**
	 * Adiciona 50% ao preço do celular.
	 */
	public function calculaPreco()
	{
		return $this->preco + ( $this->preco * 0.50);
	}
}
<?php

/**
* 
*/
class Tablet extends Eletronico
{
	/**
	 * Adiciona 20% ao preço do tablet.
	 */
	public function calculaPreco()
	{
		return $this->preco + ( $this->preco * 0.20);
	}
}
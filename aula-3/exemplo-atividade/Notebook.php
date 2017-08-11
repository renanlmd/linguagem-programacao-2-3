<?php

/**
* 
*/
class Notebook extends Eletronico
{
	/**
	 * Adiciona 10% ao preço do notebook.
	 */
	public function calculaPreco()
	{
		return $this->preco + ( $this->preco * 0.10);
	}
}
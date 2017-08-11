<?php

/**
* 
*/
class ComputadorDeMesa extends Eletronico
{
	/**
	 * Adiciona 35% ao preço do computador de mesa.
	 */
	public function calculaPreco()
	{
		return $this->preco + ( $this->preco * 0.35);
	}
}
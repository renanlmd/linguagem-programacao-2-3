<?php 
 	 
 	 interface InterfaceFatura 
 	 {
 	 	public function getNumitem();
 	 	public function getDescricao();
 	 	public function getPreco();
 	 	public function getQuantidade();
 	 	public function getTotalFatura();
 	 }
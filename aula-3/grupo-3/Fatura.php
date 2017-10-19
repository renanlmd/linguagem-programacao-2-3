 <?php
 /* Crie uma classe chamada Fatura que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos:

o número do item faturado,
a descrição do item,
a quantidade comprada do item e
o preço unitário do item.
Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser configurada como 0. Forneça um método set e um método get para cada variável de instância ( atributos ). Além disso, forneça um método chamado getTotalFatura() que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor como um float. Escreva um arquivo index.php de teste que demonstra as capacidades da classe Fatura.*/
 class Fatura implements InterfaceFatura
 {
 	public $numitem;
 	public $descricao;
 	public $preco;
 	public $quantidade;
 	public $cal =0;
 public function __construct($numitem,$descricao,$preco,$quantidade)
 {
 	$this->numitem = $numitem;
 	$this->descricao = $descricao;
 	$this->preco = $preco;
 	$this->quantidade = $quantidade;

  if ($quantidade =! true) {
  	  $quantidade = 0;
  }

 }

/* Fornecendo os método set e get para cada atributos listados a cima*/
  public function getNumitem()
  {
  	return $this->numitem;
  }
  public function setNumitem($numitem)
  {
    $this->numitem = numitem;
  }
#
  public function getDescricao()
  {
  	return $this->descricao;
  }
  public function setDescricao($descricao)
  {
    $this->descricao = descricao;
  }
  #
  public function getPreco()
  {
  	return $this->preco;
  }
  public function setPreco($preco)
  {
    $this->preco = preco;
  }
#
  public function getQuantidade()
  {
  	return $this->quantidade;
  }
  public function setQuantidade($quantidade)
  {
    $this->quantidade = quantidade;
  }
 /* outro método getTotalFatura();*/
 public function getTotalFatura()
 {
 	return $this->cal = $this->preco * $this->quantidade;
 }
}
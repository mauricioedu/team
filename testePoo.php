<?php
	
class Produto{

	public $nome;
	public $descricao;
	public $preco;
}

$tennis = new Produto();

$tennis->nome="adidas";

echo $tennis->nome;

?>
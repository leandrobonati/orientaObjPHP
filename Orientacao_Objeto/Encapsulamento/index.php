<?php
	require_once "Produto.class.php";
	
	$produto1 = new Produto("Lápis Preto", "Lápis Preto Número 2", 1000, 2.00);
	$produto2 = new Produto("Caderno", "Caderno em espiral de 100fl", 200, 15.90);
	
	
	echo $produto1->getNome() . "<br>";//get
	$produto1->setNome("Caneta");//set
	echo $produto1->getNome();//get
	
	
?>
<?php 

	include_once 'produto.php';

	$valor = new Produto();

	$valor->Codigo = 1;

	$valor->Descricao = "Bola de Futebol";

	echo $valor->Codigo. " - " .$valor->Descricao;
	
?>
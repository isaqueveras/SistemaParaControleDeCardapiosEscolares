<?php 
	$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
	mysql_select_db("cardapio") or die ("Base não encontrado!");
?>
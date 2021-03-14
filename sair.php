<?php
	// incluindo o arquivo de conexão
	include_once("conexao.php");
	// iniciando a sessão
 	session_start();

	session_destroy();

	//Remova todas as informaçoes contidas nas variaveis globais 
	unset(
		$_SESSION['admId'],
		$_SESSION['admNome'],
		$_SESSION['admEmail'],
		$_SESSION['admSenha']
	);
		
		 
	// Mensage de Sucesso de saida
	$_SESSION['cor'] = "success";
	$_SESSION['loginErro'] = "Deslogado com sucesso!";

	// Redireciona o usuario para a pagina de Login
	header("Location: index.php");
	 	

 ?>
<?php
	session_start();
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	include("conexao.php");

	$result = mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);

	if (empty($resultado)){ // variável esteja vázia ou não encontrada
		//Mensagem de Erro
		$_SESSION['loginErro'] = "E-mail ou senha Inválido"; 
		
		//Manda o usuario para a página de login
		header("Location: index.php");

	} else {
		//Define os valores atribuidos na sessão do usuário
		$_SESSION['admId'] 		= $resultado['id'];
		$_SESSION['admNome'] 	= $resultado['nome'];
		$_SESSION['admSenha'] 	= $resultado['senha'];
		$_SESSION['admEmail'] 	= $resultado['email'];

		//Manda o usuario para a página de administrativo
		header("Location: dashboard.php");
	}


?>
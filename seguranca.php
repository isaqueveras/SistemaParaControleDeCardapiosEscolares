<?php
	ob_start();
	if(($_SESSION['admId'] == "") || ($_SESSION['admNome'] == "") || ($_SESSION['admSenha'] == "") || ($_SESSION['admEmail'] == "")){
		unset($_SESSION['admId'], $_SESSION['admNome'], $_SESSION['admEmail'], $_SESSION['admSenha']);
		//Mensagem de Erro
		$_SESSION['loginErro'] = "Acesso Inválido - Área Restrita à Administradores!";

		//Manda o usuário para a tela de loginErro
		header("Location: index.php");
	}

?>
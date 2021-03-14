<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	
	$id    = $_POST['id'];
	$nome  = addslashes($_POST['nome_cad']);
	$email = addslashes($_POST['email_cad']);
    $senha = addslashes($_POST['senha_cad']);

	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Fortaleza');
	$data_atual = strftime('%d/%m/%y');
	
	$query = mysql_query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', modificado = '$data_atual' WHERE id='$id' ");

	if(mysql_affected_rows() != 0):	
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O Usuario <b>{$nome}</b> foi editado com sucesso.";
		header("Location: ../dashboard.php?link=4");
	else:
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> MENSAGEM <br> Não foi possivel editar o usuario <b>{$nome}</b>.";
		header("Location: ../dashboard.php?link=4");
	endif;
?>
<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	
    $id = $_GET['id'];
    $semana = $_GET['semana'];

    $zerar = mysql_query("UPDATE $semana SET status = 0");
	$query = mysql_query("UPDATE $semana SET status = 1 WHERE id='$id'");

	if(mysql_affected_rows() != 0):	
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O cardápio foi ativado com sucesso.";
		header("Location: ../dashboard.php?link=1");
	else:
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> MENSAGEM <br> Não foi possivel ativar o cardápio.";
		header("Location: ../dashboard.php?link=1");
	endif;
?>
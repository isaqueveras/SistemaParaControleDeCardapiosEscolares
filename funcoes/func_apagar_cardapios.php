<?php  
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
    $id = $_GET['id'];
    $semana = $_GET['semana'];
	$query = mysql_query("DELETE FROM $semana WHERE id='$id' ");
	
	if(mysql_affected_rows() != 0):	
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O cardápio foi apagado com sucesso.";
		header("Location: ../dashboard.php?link=1");
	else:
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> <b>MENSAGEM </b> <br> Não foi possivel apagar o cardápio.";
		header("Location: ../dashboard.php?link=1");
	endif;
?>
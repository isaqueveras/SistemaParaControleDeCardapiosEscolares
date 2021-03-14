<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	
	$id       = $_POST['id'];
	$tipo     = addslashes($_POST['tipo_cad']);
	$local    = addslashes($_POST['local_cad']);
    $datahora = addslashes($_POST['datahora_cad']);
    $mensagem = addslashes($_POST['mensagem_cad']);
	
	$query = mysql_query("UPDATE avisos SET tipos = '$tipo', local = '$local', datahora = '$datahora', msg = '$mensagem' WHERE id='$id' ");

	if(mysql_affected_rows() != 0):	
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O aviso foi editado com sucesso.";
		header("Location: ../dashboard.php?link=9");
	else:
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> MENSAGEM <br> Não foi possivel editar o aviso.";
		header("Location: ../dashboard.php?link=9");
	endif;
?>
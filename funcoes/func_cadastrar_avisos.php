<?php  
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$tipo     = addslashes($_POST['tipo_cad']);
	$local    = addslashes($_POST['local_cad']);
    $datahora = addslashes($_POST['datahora_cad']);
    $mensagem = addslashes($_POST['mensagem_cad']);

	$query = mysql_query("INSERT INTO avisos (tipos,local,datahora,msg) VALUES ('$tipo','$local','$datahora','$mensagem')");

	if(mysql_affected_rows() != 0):	
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM</b> <br>  O aviso foi cadastrado com sucesso.";
		header("Location: ../dashboard.php?link=9");
	else:
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> <b>MENSAGEM</b> <br> Não foi possivel cadastrar o aviso <b></b>.";
		header("Location: ../dashboard.php?link=9");
	endif;
?>
<?php  
	session_start();
	include_once("../seguranca.php");
    include_once("../conexao.php");
    
    $id = $_GET['id'];

	$query = mysql_query("DELETE FROM usuarios WHERE id='$id' ");
	
	if(mysql_affected_rows() != 0):	
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O Usuario foi apagado com sucesso.";
		header("Location: ../dashboard.php?link=4");
	else:
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> <b>MENSAGEM </b> <br> Não foi possivel apagar o usuario.";
		header("Location: ../dashboard.php?link=4");
	endif;
?>
<?php  
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

	$nome  = addslashes($_POST['nome_cad']);
	$email = addslashes($_POST['email_cad']);
    $senha = addslashes($_POST['senha_cad']);

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Fortaleza');
    $data_atual = strftime('%d/%m/%y');
    
	$query = mysql_query("INSERT INTO usuarios (nome,email,senha,criado) VALUES ('$nome','$email','$senha','$data_atual')");

	if(mysql_affected_rows() != 0):	
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM</b> <br>  O Usuario <b>{$nome}</b> foi cadastrado com sucesso.";
		header("Location: ../dashboard.php?link=4");
	else:
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> <b>MENSAGEM</b> <br> Não foi possivel cadastrar o usuario <b>{$nome}</b>.";
		header("Location: ../dashboard.php?link=4");
	endif;
?>
<?php
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
	
	$id 			 = $_POST['id'];
    $nomecardapio    = addslashes($_POST['name_cardapio']);
	$cafe            = addslashes($_POST['cafe']);
    $almoco          = addslashes($_POST['almoco']);
    $acompanhante    = addslashes($_POST['acompanhante']);
    $guarnicao       = addslashes($_POST['guarnicao']);
    $salada          = addslashes($_POST['salada']);
    $bebida          = addslashes($_POST['bebida']);
    $sobremesa       = addslashes($_POST['sobremesa']);
    $lanche          = addslashes($_POST['lanche']);
    $semana          = addslashes($_POST['semana']);

	$query = mysql_query("UPDATE $semana SET nomecardapio = '$nomecardapio', cafe = '$cafe', almoco = '$almoco', acomp = '$acompanhante', guarn = '$guarnicao', salada = '$salada', bebida = '$bebida', sobrem = '$sobremesa', lanche = '$lanche' WHERE id='$id' ");

	if(mysql_affected_rows() != 0):	
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> <b>MENSAGEM </b><br>  O cardápio foi editado com sucesso.";
		header("Location: ../dashboard.php?link=1");
	else:
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> MENSAGEM <br> Não foi possivel editar o cardápio.";
		header("Location: ../dashboard.php?link=1");
	endif;
?>
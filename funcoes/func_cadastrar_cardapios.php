<?php  
	session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

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

	$query = mysql_query("INSERT INTO $semana (nomecardapio,cafe,almoco,acomp,guarn,salada,bebida,sobrem,lanche,status) VALUES ('$nomecardapio','$cafe','$almoco','$acompanhante','$guarnicao','$salada','$bebida','$sobremesa','$lanche',0)");

	if(mysql_affected_rows() != 0):	
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "success";
		$_SESSION['proc'] = "<span data-feather='bell'></span> MENSAGEM <br>  O produto <b>$produto</b> foi cadastrado com sucesso.";
		header("Location: ../dashboard.php?link=1");
	else:
		$_SESSION['semana']  = "{$semana}";
		$_SESSION['cor']  = "danger";
		$_SESSION['proc'] = "<span data-feather='bell-off'></span> MENSAGEM <br> Não foi possivel cadastrar o produto <b></b>.";
		header("Location: ../dashboard.php?link=1");
	endif;
?>
<?php
    include_once("conexao.php");

    // Segunda
	$seg = mysql_query("SELECT * FROM segunda ORDER BY id DESC LIMIT 10");
    $segunda = mysql_num_rows($seg);
    // terca
	$ter = mysql_query("SELECT * FROM terca ORDER BY id DESC LIMIT 10");
    $terca = mysql_num_rows($ter);
    // quarta
	$qua = mysql_query("SELECT * FROM quarta ORDER BY id DESC LIMIT 10");
    $quarta = mysql_num_rows($qua);
    // quinta
	$qui = mysql_query("SELECT * FROM quinta ORDER BY id DESC LIMIT 10");
    $quinta = mysql_num_rows($qui);
    // sexta
	$sex = mysql_query("SELECT * FROM sexta ORDER BY id DESC LIMIT 10");
    $sexta = mysql_num_rows($sex);
?>
<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2>Listar Cardápios</h2>
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=3" class="btn btn-primary" style="float:right;">Cadastrar <span data-feather="plus"></span></a> 
        </div>
    </div><hr>
</div>

    <?php 
		if(isset($_SESSION['cor'])):
			$cor = $_SESSION['cor'];
			unset ($_SESSION['cor']);
        endif;
        
	  	// Se existir a sessão aparecerar um alert
	  	if(isset($_SESSION['proc'])): ?>
            <div class="alert alert-<?php echo $cor; ?>" role="alert">
                <?php echo $_SESSION['proc']; ?>
	  			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	  		</div>
            <?php unset ($_SESSION['proc']);
          endif;
          
        include_once("particao/sessao_nav-tabs.php");
	?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
           <?php echo $semana_segunda; ?>
        </li>
        <li class="nav-item">
            <?php echo $semana_terca; ?>
        </li>
        <li class="nav-item">
            <?php echo $semana_quarta; ?>
        </li>
        <li class="nav-item">
            <?php echo $semana_quinta; ?>
        </li>
        <li class="nav-item">
            <?php echo $semana_sexta; ?>
        </li>
    </ul>


<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade <?php echo $css_segunda; ?>" id="segunda" role="tabpanel" aria-labelledby="home-segunda"><br>
        <h5>Segunda-Feira</h5>
        <!-- incluindo o arquivo que lista os cardapio de segunda -->
        <?php include_once("particao/cardapio_segunda.php"); ?>
    </div>
    <!-- Terça -->
    <div class="tab-pane fade <?php echo $css_terca; ?>" id="terca" role="tabpanel" aria-labelledby="home-terca"><br>
        <h5>Terça-Feira</h5>
        <!-- incluindo o arquivo que lista os cardapio de terça -->
        <?php include_once("particao/cardapio_terca.php"); ?>
    </div>

    <!-- Quarta -->
    <div class="tab-pane fade <?php echo $css_quarta; ?>" id="quarta" role="tabpanel" aria-labelledby="home-quarta"><br>
        <h5>Quarta-Feira</h5>
        <!-- incluindo o arquivo que lista os cardapio de quarta -->
        <?php include_once("particao/cardapio_quarta.php"); ?>
    </div>

    <!-- Quinta -->
    <div class="tab-pane fade <?php echo $css_quinta; ?>" id="quinta" role="tabpanel" aria-labelledby="home-quinta"><br>
        <h5>Quinta-Feira</h5>
        <!-- incluindo o arquivo que lista os cardapio de quinta -->
        <?php include_once("particao/cardapio_quinta.php"); ?>
    </div>

    <!-- Sexta -->
    <div class="tab-pane fade <?php echo $css_sexta; ?>" id="sexta" role="tabpanel" aria-labelledby="home-sexta"><br>
        <h5>Sexta-Feira</h5>
        <!-- incluindo o arquivo que lista os cardapio de sexta -->
        <?php include_once("particao/cardapio_sexta.php"); ?>
    </div>
</div>

<script>
    $(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
</script>
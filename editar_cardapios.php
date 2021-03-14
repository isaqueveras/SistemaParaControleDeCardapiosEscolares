<?php  
	include_once("seguranca.php");
	include_once("conexao.php");
	$id = $_GET['id'];
	$semana = $_GET['semana'];
	// executa consulta
	$resultado = mysql_fetch_assoc(mysql_query("SELECT * FROM $semana WHERE id = '$id' LIMIT 1 "));
?>
<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2>Editar Cardápio</h2>
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=1" class="btn btn-primary" style="float:right;"> <span data-feather="arrow-left-circle"></span> Listar Cardapios</a> 
        </div>
    </div>
</div><hr>

<form class="was-validated" method="POST" action="funcoes/func_editar_cardapios.php">

   <div class="col-12">
        <div class="row">
            <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
            
            <div class="col-md-12">
                <label for="validationServer00">Nome do Cardápio</label>
                <input value="<?php echo $resultado['nomecardapio']; ?>" name="name_cardapio" type="text" class="form-control is-valid" id="validationServer00" placeholder="Nome do Cardápio" required autofocus>
            </div>

            <div class="col-md-4">
                <label for="validationServer01">Café da Manhã</label>
                <input value="<?php echo $resultado['cafe']; ?>" name="cafe" type="text" class="form-control is-valid" id="validationServer01" placeholder="Café da Manhã" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer02">Almoço</label>
                <input value="<?php echo $resultado['almoco']; ?>" name="almoco" type="text" class="form-control is-valid" id="validationServer02" placeholder="Almoço" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer03">Acompanhante</label>
                <input value="<?php echo $resultado['acomp']; ?>" name="acompanhante" type="text" class="form-control is-valid" id="validationServer03" placeholder="Acompanhante" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer04">Guarnição</label>
                <input value="<?php echo $resultado['guarn']; ?>" name="guarnicao" type="text" class="form-control is-valid" id="validationServer04" placeholder="Guarnição" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer05">Salada</label>
                <input value="<?php echo $resultado['salada']; ?>" name="salada" type="text" class="form-control is-valid" id="validationServer05" placeholder="Salada" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer06">Bebida</label>
                <input value="<?php echo $resultado['bebida']; ?>" name="bebida" type="text" class="form-control is-valid" id="validationServer06" placeholder="Bebida" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer07">Sobremesa</label>
                <input value="<?php echo $resultado['sobrem']; ?>" name="sobremesa" type="text" class="form-control is-valid" id="validationServer07" placeholder="Sobremesa" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer08">Lanche da Tarde</label>
                <input value="<?php echo $resultado['lanche']; ?>" name="lanche" type="text" class="form-control is-valid" id="validationServer08" placeholder="Lanche da Tarde" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer09">Dia da Semana</label>
                <select class="custom-select" required id="validationServer09" name="semana">
                    <option value="segunda" <?php  if ($semana == "segunda") { echo 'Selected'; } ?> >Segunda-Feira</option>
                    <option value="terca"   <?php  if ($semana == "terca")   { echo 'Selected'; } ?> >Terça-Feira</option>
                    <option value="quarta"  <?php  if ($semana == "quarta")  { echo 'Selected'; } ?> >Quarta-Feira</option>
                    <option value="quinta"  <?php  if ($semana == "quinta")  { echo 'Selected'; } ?> >Quinta-Feira</option>
                    <option value="sexta"   <?php  if ($semana == "sexta")   { echo 'Selected'; } ?> >Sexta-Feira</option>
                </select>
            </div>

            <div class="col-md-12"><hr>
                <div class="jumbotron" style="padding:10px;">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <button type="reset" class="btn btn-danger">Limpar Campos</button>
                </div>
            </div>

        </div>
   </div>

</form>
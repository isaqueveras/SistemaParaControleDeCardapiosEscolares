<?php  
	include_once("seguranca.php");
	include_once("conexao.php");
	$id = $_GET['id'];
	// executa consulta
	$resultado = mysql_fetch_assoc(mysql_query("SELECT * FROM avisos WHERE id = '$id' LIMIT 1 "));
?>
<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2>Editar Avisos</h2>
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=9" class="btn btn-primary" style="float:right;"> <span data-feather="arrow-left-circle"></span> Listar Usuários</a> 
        </div>
    </div>
</div><hr>

<form class="was-validated" method="POST" action="funcoes/func_editar_avisos.php">

   <div class="col-12">
        <div class="row">
            <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
            <div class="col-md-4">
                <label for="validationServer06">Tipo</label>
                <input name="tipo_cad" type="text" class="form-control is-valid" id="validationServer06" placeholder="Tipo" required value="<?php echo $resultado['tipos']; ?>">
            </div>

            <div class="col-md-4">
                <label for="validationServer07">Local</label>
                <input name="local_cad" type="text" class="form-control is-valid" id="validationServer07" placeholder="Local" required value="<?php echo $resultado['local']; ?>">
            </div>

            <div class="col-md-4">
                <label for="validationServer08">Data e Hora</label>
                <input name="datahora_cad" type="text" class="form-control is-valid" id="validationServer08" placeholder="Data e Hora" required value="<?php echo $resultado['datahora']; ?>">
            </div>

            <div class="col-md-12">
                <label for="Mensagem">Mensagem</label>
                <!-- <input name="senha_cad" type="text" class="form-control is-valid ckeditor" id="validationServer08" placeholder="Senha" required> -->
                <textarea name="mensagem_cad" id="Mensagem" class="form-control is-valid ckeditor" required><?php echo $resultado['msg']; ?></textarea>
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
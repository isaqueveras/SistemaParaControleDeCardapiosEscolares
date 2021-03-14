<?php  
	include_once("seguranca.php");
	include_once("conexao.php");
	$id = $_GET['id'];
	// executa consulta
	$resultado = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1 "));
?>
<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2>Cadastrar Usuário</h2>
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=4" class="btn btn-primary" style="float:right;"> <span data-feather="arrow-left-circle"></span> Listar Usuários</a> 
        </div>
    </div>
</div><hr>

<form class="was-validated" method="POST" action="funcoes/func_editar_usuarios.php">

   <div class="col-12">
        <div class="row">
            <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
            <div class="col-md-4">
                <label for="validationServer06">Nome</label>
                <input name="nome_cad" type="text" class="form-control is-valid" id="validationServer06" placeholder="Nome" required value="<?php echo $resultado['nome']; ?>">
            </div>

            <div class="col-md-4">
                <label for="validationServer07">E-mail</label>
                <input name="email_cad" type="email" class="form-control is-valid" id="validationServer07" placeholder="E-mail" required value="<?php echo $resultado['email']; ?>">
            </div>

            <div class="col-md-4">
                <label for="validationServer08">Senha</label>
                <input name="senha_cad" type="password" class="form-control is-valid" id="validationServer08" placeholder="Senha" required value="<?php echo $resultado['senha']; ?>">
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
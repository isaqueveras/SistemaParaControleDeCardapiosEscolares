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

<form class="was-validated" method="POST" action="funcoes/func_cadastrar_usuarios.php">

   <div class="col-12">
        <div class="row">
            
            <div class="col-md-4">
                <label for="validationServer06">Nome</label>
                <input name="nome_cad" type="text" class="form-control is-valid" id="validationServer06" placeholder="Nome" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer07">E-mail</label>
                <input name="email_cad" type="email" class="form-control is-valid" id="validationServer07" placeholder="E-mail" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer08">Senha</label>
                <input name="senha_cad" type="password" class="form-control is-valid" id="validationServer08" placeholder="Senha" required>
            </div>

            <div class="col-md-12"><hr>
                <div class="jumbotron" style="padding:10px;">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-danger">Limpar Campos</button>
                </div>
            </div>

        </div>
   </div>

</form>
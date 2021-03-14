<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2>Cadastrar Cardápio</h2>
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=1" class="btn btn-primary" style="float:right;"> <span data-feather="arrow-left-circle"></span> Listar Cardapios</a> 
        </div>
    </div>
</div><hr>

<form class="was-validated" method="POST" action="funcoes/func_cadastrar_cardapios.php">

   <div class="col-12">
        <div class="row">
            
            <div class="col-md-12">
                <label for="validationServer00">Nome do Cardápio</label>
                <input name="name_cardapio" type="text" class="form-control is-valid" id="validationServer00" placeholder="Nome do Cardápio" required autofocus>
            </div>

            <div class="col-md-4">
                <label for="validationServer01">Café da Manhã</label>
                <input name="cafe" type="text" class="form-control is-valid" id="validationServer01" placeholder="Café da Manhã" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer02">Almoço</label>
                <input name="almoco" type="text" class="form-control is-valid" id="validationServer02" placeholder="Almoço" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer03">Acompanhante</label>
                <input name="acompanhante" type="text" class="form-control is-valid" id="validationServer03" placeholder="Acompanhante" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer04">Guarnição</label>
                <input name="guarnicao" type="text" class="form-control is-valid" id="validationServer04" placeholder="Guarnição" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer05">Salada</label>
                <input name="salada" type="text" class="form-control is-valid" id="validationServer05" placeholder="Salada" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer06">Bebida</label>
                <input name="bebida" type="text" class="form-control is-valid" id="validationServer06" placeholder="Bebida" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer07">Sobremesa</label>
                <input name="sobremesa" type="text" class="form-control is-valid" id="validationServer07" placeholder="Sobremesa" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer08">Lanche da Tarde</label>
                <input name="lanche" type="text" class="form-control is-valid" id="validationServer08" placeholder="Lanche da Tarde" required>
            </div>

            <div class="col-md-4">
                <label for="validationServer09">Dia da Semana</label>
                <select class="custom-select" required id="validationServer09" name="semana">
                    <option value="">-- SELECIONE --</option>
                    <option value="segunda">Segunda-Feira</option>
                    <option value="terca">Terça-Feira</option>
                    <option value="quarta">Quarta-Feira</option>
                    <option value="quinta">Quinta-Feira</option>
                    <option value="sexta">Sexta-Feira</option>
                </select>
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
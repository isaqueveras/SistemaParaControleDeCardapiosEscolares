<?php
    include_once("conexao.php");
	$resultado = mysql_query("SELECT * FROM avisos ORDER BY id DESC LIMIT 15");
    $linha = mysql_num_rows($resultado);
?>
<div class="col-12" style="padding:0;">
    <div class="row">
        <div class="col-md-6">
            <h2> Listar Avisos</h2> 
        </div>
        <div class="col-md-6">
            <a href="dashboard.php?link=7" class="btn btn-primary" style="float:right;">Cadastrar <span data-feather="plus"></span></a> 
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
          
?>

<div class="table-responsive-sm">
   <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <?php
                if ($linha > 0) { ?>
                        <tr>
                            <th scope="col">Tipos</th>
                            <th scope="col">Local</th>
                            <th scope="col">Data e Hora</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Ações</th>
                        </tr>
                <?php }else{
                    echo '<div class="card">
                    <div class="card-body">
                    <h5 class="card-title">'.strtoupper("Não foi encontrado nenhum aviso cadastrado!").'</h5>
                    <p class="card-text">Para cadastrar um novo aviso basta da um click no botão abaixo.</p>
                    <a href="dashboard.php?link=7" class="btn btn-primary">Cadastrar Avisos</a>
                    </div>
                </div>';
                }
            ?>
        </thead>
      <tbody>

        <?php  
            while($linha = mysql_fetch_array($resultado)){ ?>
                <tr>
                    <td><?php echo $linha['tipos']; ?></td>
                    <td><?php echo $linha['local']; ?></td>
                    <td><?php echo $linha['datahora']; ?></td>
                    <td><?php echo $linha['msg']; ?></td>
                    <td>
                        <a href="dashboard.php?link=8&id=<?php echo $linha['id']; ?>" class="btn btn-sm btn-secondary"> <span data-feather="edit"></span></a>
                        <button href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#usuario-<?php echo $linha['id']; ?>"> <span data-feather="trash-2"></span></button>
                        
                        <div class="modal fade" id="usuario-<?php echo $linha['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#dc3545;color:#fff;">
                                        <h6 class="modal-title">APAGAR USUARIO?</h6>
                                    </div>
                                    <div class="modal-body">
                                        Deseja apagar o aviso?</b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a href="funcoes/func_apagar_avisos.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger"><i class="fa fa-check"></i> Apagar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
        <?php } ?>

      </tbody>
   </table>
</div>
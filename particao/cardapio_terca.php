<div class="table-responsive-sm">
   <table class="table table-hover table-striped table-bordered">
      <thead class="thead-dark">
        <?php
            if ($terca > 0) { ?>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Café</th>
                    <th scope="col">Almoço</th>
                    <th scope="col">Acomp.</th>
                    <th scope="col">Guarnição</th>
                    <th scope="col">Salada</th>
                    <th scope="col">Bebida</th>
                    <th scope="col">Sobremesa</th>
                    <th scope="col">Lanche</th>
                    <th scope="col">Ações</th>
                </tr>
            <?php }else{
                 echo '<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.strtoupper("Não foi encontrado nenhum cardapio cadastrado!").'</h5>
                                <p class="card-text">Para cadastrar um novo cardápio basta da um click no botão abaixo.</p>
                                <a href="dashboard.php?link=3" class="btn btn-primary">Cadastrar Cardápio</a>
                            </div>
                        </div>';
            }
        ?>
      </thead>
      <tbody>

        <?php  
            while($linha_terca = mysql_fetch_array($ter)){ ?>
                <tr>
                    <td>
                        <?php
                            // saber se o Butão e de ativar ou desativar
                            if($linha_terca['status'] == 1){ ?>
                                <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ativado"><span data-feather="thumbs-up"></span></button>
                            <?php }else{ ?>
                                <a href="funcoes/func_ativar_cardapio.php?id=<?php echo $linha_terca['id'] ?>&semana=terca" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Ativar"><span data-feather="thumbs-down"></span></a>
                            <?php }
                        ?>
                    </td>
                    <td><?php echo $linha_terca['nomecardapio']; ?></td>
                    <td><?php echo $linha_terca['cafe']; ?></td>
                    <td><?php echo $linha_terca['almoco']; ?></td>
                    <td><?php echo $linha_terca['acomp']; ?></td>
                    <td><?php echo $linha_terca['guarn']; ?></td>
                    <td><?php echo $linha_terca['salada']; ?></td>
                    <td><?php echo $linha_terca['bebida']; ?></td>
                    <td><?php echo $linha_terca['sobrem']; ?></td>
                    <td><?php echo $linha_terca['lanche']; ?></td>
                    <td>
                        <a href="dashboard.php?link=2&id=<?php echo $linha_terca['id']; ?>&semana=terca" class="btn btn-sm btn-secondary"> <span data-feather="edit"></span></a>
                        <button href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#cardapio-terca-<?php echo $linha_terca['id']; ?>"> <span data-feather="trash-2"></span></button>
                        
                        <div class="modal fade" id="cardapio-terca-<?php echo $linha_terca['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#dc3545;color:#fff;">
                                        <h6 class="modal-title">APAGAR CARDAPIO?</h6>
                                    </div>
                                    <div class="modal-body">
                                        Deseja apagar o cardápio <b><?php echo $linha_terca['nomecardapio']; ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a href="funcoes/func_apagar_cardapios.php?id=<?php echo $linha_terca['id']; ?>&semana=terca" class="btn btn-danger"><i class="fa fa-check"></i> Apagar</a>
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
<?php
  session_start();
  include_once("conexao.php");
  include_once("seguranca.php");
    
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Isaque Veras">
    <title>Área do Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">CARDÁPIO ESCOLAR <small>V1.0</small></a>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#sair">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    
    <?php include_once("menu.php"); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>
    
      <?php  
        include_once("menu.php");

        $link = $_GET['link'];

        $pag[0] = "bem_vindo.php";
        $pag[1] = "listar_cardapios.php";
        $pag[2] = "editar_cardapios.php";
        $pag[3] = "cadastrar_cardapios.php";
        $pag[4] = "listar_usuarios.php";
        $pag[5] = "editar_usuarios.php";
        $pag[6] = "cadastrar_usuarios.php";
        $pag[7] = "cadastrar_avisos.php";
        $pag[8] = "editar_avisos.php";
        $pag[9] = "listar_avisos.php";

        if(!empty($link)){
          if (file_exists($pag[$link])) {
            include $pag[$link];
          }else{
            include "bem_vindo.php";
          }
        }else{
          include "bem_vindo.php";
        }
      ?>

    </main>

  </div>
</div>

  <div class="modal fade" id="sair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">SAIR DO SISTEMA?</h6>
        </div>
        <div class="modal-body">
          Deseja sair do sistema?</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <a href="sair.php" class="btn btn-danger"><i class="fa fa-check"></i> Sair</a>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/dashboard.js"></script></body>
</html>

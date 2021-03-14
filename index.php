<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Isaque Veras">
    <title>Área de Login</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/"> -->

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


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
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <!--// destroi todas as variaves impedindo acesso pela url-->
    <?php 
      unset(
        $_SESSION['admId'],       
        $_SESSION['admNome'],     
        $_SESSION['admEmail'],
        $_SESSION['admSenha']
      );
     ?>
      <div class="container">
        <form class="form-signin" action="valida_login.php" method="POST">
            <div class="text-center mb-4">
                <img class="img-resposivel" src="img/logo-cardapio.png" alt="" width="150" height="150">
                <!-- <h1 class="h3 mb-3 font-weight-normal">CARDÁPIO ESCOLAR</h1> -->
                <!-- <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p> -->
            </div>

            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus name="email">
                <label for="inputEmail">E-mail</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
                <label for="inputPassword">Senha</label>
            </div>

            
            <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button> <br>

            <?php

            if(isset($_SESSION['cor'])):
                $cor = $_SESSION['cor'];
                unset ($_SESSION['cor']);
            else:
                $cor = "danger";
            endif;

            if(isset($_SESSION['loginErro'])){ ?>
                <div class="alert alert-<?php echo $cor; ?>" role="alert">
                    <center><?php echo $_SESSION['loginErro']; ?></center>
                </div>  
                <?php unset ($_SESSION['loginErro']);
            } ?>

            <p class="mt-5 mb-3 text-muted text-center">Desenvolvido por Isaque Veras</p>
            </form>
      </div>

</body>
</html>

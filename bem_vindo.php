<?php
    // Tabela de Usuarios
    $usu = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `usuarios`"));
    $usuarios = $usu['count'];
    // Tabela de Segunda
    $seg = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `segunda`"));
    $segunda = $seg['count'];
    // Tabela de Terça
    $ter = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `terca`"));
    $terca = $ter['count'];
    // Tabela de Quarta
    $qua = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `quarta`"));
    $quarta = $qua['count'];
    // Tabela de Quinta
    $qui = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `quinta`"));
    $quinta = $qui['count'];
    // Tabela de Sexta
    $sex = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `sexta`"));
    $sexta = $sex['count'];

    $cardapio = ($segunda+$terca+$quarta+$quinta+$sexta);

    // Tabela de Avisos
    $avi = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `avisos`"));
    $avisos = $avi['count'];

    $id = $_SESSION['admId'];
    $resultado = mysql_fetch_assoc(mysql_query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1 "));
?>
<style>
    .design-item-black{
        float:right;
        margin-right:5px;
        font-size:35px;
        color:black;
        font-family:"Montserrat";
    }
    .design-white{
        height:100px;
        color: black;
        border:.5px solid #ddd;
    }
</style>

<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h2>Seja Bem Vindo <?php echo $resultado['nome']; ?></h2><hr>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item design-white">
                    <span class="design-item-black">
                        <?php echo $usuarios; ?>
                    </span>
                    <em class="text-success">Todos os Usuários</em> <h2>Usuários</h2>
                </li>
            </ul>
        </div>

        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item design-white">
                    <span class="design-item-black">
                        <?php echo $cardapio; ?>
                    </span>
                    <em class="text-success">Todos os Cardápios</em> <h2>Cardápios</h2>
                </li>
            </ul>
        </div>

        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item design-white">
                    <span class="design-item-black">
                        <?php echo $avisos; ?>
                    </span>
                    <em class="text-success">Todos os Avisos</em> <h2>Avisos</h2>
                </li>
            </ul>
        </div>

    </div>
</div>


<?php
    include_once("conexao.php");
    // Tabela de Segunda
    $seg_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `segunda`"));
    $segunda_count = $seg_count['count'];
    // Tabela de Terça
    $ter_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `terca`"));
    $terca_count = $ter_count['count'];
    // Tabela de Quarta
    $qua_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `quarta`"));
    $quarta_count = $qua_count['count'];
    // Tabela de Quinta
    $qui_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `quinta`"));
    $quinta_count = $qui_count['count'];
    // Tabela de Sexta
    $sex_count = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS `count` FROM `sexta`"));
    $sexta_count = $sex_count['count'];


    if (isset($_SESSION['semana'])) {
        if($_SESSION['semana'] == "segunda"){
            $semana_segunda = '<a class="nav-link active" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="true"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
            $semana_terca   = '<a class="nav-link" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="false"> <span class="badge badge-dark">'.$terca_count.'</span> Terça-Feira</a>';
            $semana_quarta  = '<a class="nav-link" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="false"> <span class="badge badge-dark">'.$quarta_count.'</span> Quarta-Feira</a>';
            $semana_quinta  = '<a class="nav-link" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="false"> <span class="badge badge-dark">'.$quinta_count.'</span> Quinta-Feira</a>';
            $semana_sexta   = '<a class="nav-link" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="false"> <span class="badge badge-dark">'.$sexta_count.'</span> Sexta-Feira</a>';

            $css_segunda = ' show active';
            $css_terca   = '';
            $css_quarta  = '';
            $css_quinta  = '';
            $css_sexta   = '';

        }else if($_SESSION['semana'] == "terca"){
            $semana_segunda = '<a class="nav-link" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="false"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
            $semana_terca   = '<a class="nav-link active" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="true"> <span class="badge badge-dark">'.$terca_count.'</span> Terça-Feira</a>';
            $semana_quarta  = '<a class="nav-link" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="false"> <span class="badge badge-dark">'.$quarta_count.'</span> Quarta-Feira</a>';
            $semana_quinta  = '<a class="nav-link" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="false"> <span class="badge badge-dark">'.$quinta_count.'</span> Quinta-Feira</a>';
            $semana_sexta   = '<a class="nav-link" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="false"> <span class="badge badge-dark">'.$sexta_count.'</span> Sexta-Feira</a>';
        
            $css_segunda = '';
            $css_terca   = ' show active';
            $css_quarta  = '';
            $css_quinta  = '';
            $css_sexta   = '';

        }else if($_SESSION['semana'] == "quarta"){
            $semana_segunda = '<a class="nav-link" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="false"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
            $semana_terca   = '<a class="nav-link" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="false"> <span class="badge badge-dark">'.$terca_count.'</span> Terça-Feira</a>';
            $semana_quarta  = '<a class="nav-link active" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="true"> <span class="badge badge-dark">'.$quarta_count.'</span> Quarta-Feira</a>';
            $semana_quinta  = '<a class="nav-link" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="false"> <span class="badge badge-dark">'.$quinta_count.'</span> Quinta-Feira</a>';
            $semana_sexta   = '<a class="nav-link" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="false"> <span class="badge badge-dark">'.$sexta_count.'</span> Sexta-Feira</a>';
        
            $css_segunda = '';
            $css_terca   = '';
            $css_quarta  = ' show active';
            $css_quinta  = '';
            $css_sexta   = '';

        }else if($_SESSION['semana'] == "quinta"){
            $semana_segunda = '<a class="nav-link" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="false"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
            $semana_terca   = '<a class="nav-link" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="false"> <span class="badge badge-dark">'.$terca_count.'</span> Terça-Feira</a>';
            $semana_quarta  = '<a class="nav-link" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="false"> <span class="badge badge-dark">'.$quarta_count.'</span> Quarta-Feira</a>';
            $semana_quinta  = '<a class="nav-link active" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="true"> <span class="badge badge-dark">'.$quinta_count.'</span> Quinta-Feira</a>';
            $semana_sexta   = '<a class="nav-link" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="false"> <span class="badge badge-dark">'.$sexta_count.'</span> Sexta-Feira</a>';
        
            $css_segunda = '';
            $css_terca   = '';
            $css_quarta  = '';
            $css_quinta  = ' show active';
            $css_sexta   = '';

        }else if($_SESSION['semana'] == "sexta"){
            $semana_segunda = '<a class="nav-link" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="false"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
            $semana_terca   = '<a class="nav-link" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="false"> <span class="badge badge-dark">'.$terca_count.'</span> Terça-Feira</a>';
            $semana_quarta  = '<a class="nav-link" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="false"> <span class="badge badge-dark">'.$quarta_count.'</span> Quarta-Feira</a>';
            $semana_quinta  = '<a class="nav-link" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="false"> <span class="badge badge-dark">'.$quinta_count.'</span> Quinta-Feira</a>';
            $semana_sexta   = '<a class="nav-link active" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="true"> <span class="badge badge-dark">'.$sexta_count.'</span> Sexta-Feira</a>';
        
            $css_segunda = '';
            $css_terca   = '';
            $css_quarta  = '';
            $css_quinta  = '';
            $css_sexta   = ' show active';

        }
    }else{
        $semana_segunda = '<a class="nav-link active text-dark" id="home-segunda" data-toggle="tab" href="#segunda" role="tab" aria-controls="segunda" aria-selected="true"> <span class="badge badge-dark">'.$segunda_count.'</span> Segunda-Feira</a>';
        $semana_terca   = '<a class="nav-link text-dark" id="home-terca" data-toggle="tab" href="#terca" role="tab" aria-controls="terca" aria-selected="false"> <span class="badge badge-dark">05</span> <span class="badge badge-dark">'.$terca_count.'</span>  Terça-Feira</a>';
        $semana_quarta  = '<a class="nav-link text-dark" id="home-quarta" data-toggle="tab" href="#quarta" role="tab" aria-controls="quarta" aria-selected="false"> <span class="badge badge-dark">05</span> <span class="badge badge-dark">'.$quarta_count.'</span>  Quarta-Feira</a>';
        $semana_quinta  = '<a class="nav-link text-dark" id="home-quinta" data-toggle="tab" href="#quinta" role="tab" aria-controls="quinta" aria-selected="false"> <span class="badge badge-dark">05</span <span class="badge badge-dark">'.$quinta_count.'</span> > Quinta-Feira</a>';
        $semana_sexta   = '<a class="nav-link text-dark" id="home-sexta" data-toggle="tab" href="#sexta" role="tab" aria-controls="sexta" aria-selected="false"> <span class="badge badge-dark">05</span> <span class="badge badge-dark">'.$sexta_count.'</span>  Sexta-Feira</a>';

        $css_segunda = ' show active';
        $css_terca   = '';
        $css_quarta  = '';
        $css_quinta  = '';
        $css_sexta   = '';
    }
?>
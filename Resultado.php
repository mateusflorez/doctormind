<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Mind</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="icon" href="_images/doctor_mind_loguinho.png">
  </head>
  <script type="text/javascript">
    function limpar(){
     window.open("Teste.html", "_self");
    }
</script>

  <body>
    
    <nav class="navbar navbar-toggleable-sm navbar-inverse" style="background: rgb(35, 138, 145);">
        <div class="container">
          <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="index.html"><img src="_images/home.png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Início</strong></a>
              <a class="nav-item nav-link" href="Teste.html"><img src="_images/test (1).png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Teste</strong></a>
              <a class="nav-item nav-link" href="Transtornos.html"><img src="_images/brain (1).png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Transtornos</strong></a>
              <a class="nav-item nav-link" href="about.html"><img src="_images/about.png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Sobre</strong></a>
            </div>
          </div>
        </div>
      </nav>
    <body>
    <br></br>
    
    <div class="page-header pb-3 pt-4 text-center" style="color: rgb(85, 85, 85);">
      <h1>Resultado</h1>
  </div>
</br></br>
<div class="container">
    <div class="row text-muted">

        <form>
        <?php
            
            


            //Calculos
            

            //status
            echo"<br>nome: ".$_SESSION["nome"]."<br><br>";
            if ($_SESSION["pts_p"] > 70) {
              echo"Paranóide: ".number_format($_SESSION["pts_p"],2)."%<br>";
            }
            if ($_SESSION["pts_ee"] > 70) {
              echo"Esquisóide: ".number_format($_SESSION["pts_ee"],2)."%<br>";
            }
            if ($_SESSION["pts_ea"] > 70) {
              echo"Esquizotipico: ".number_format($_SESSION["pts_ea"],2)."%<br>";
            }
            if ($_SESSION["pts_a"] > 70) {
              echo"Antissocial: ".number_format($_SESSION["pts_a"],2)."%<br>";
            }
            if ($_SESSION["pts_b"] > 70) {
              echo"Borderline: ".number_format($_SESSION["pts_b"],2)."%<br>";
            }
            if ($_SESSION["pts_h"] > 70) {
              echo"Histrionico: ".number_format($_SESSION["pts_h"],2)."%<br>";
            }
            if ($_SESSION["pts_n"] > 70) {
              echo"Narcisista: ".number_format($_SESSION["pts_n"],2)."%<br>";
            }
            if ($_SESSION["pts_eo"] > 70) {
              echo"Esquivo: ".number_format($_SESSION["pts_eo"],2)."%<br>";
            }
            if ($_SESSION["pts_d"] > 70) {
              echo"Dependente: ".number_format($_SESSION["pts_d"],2)."%<br>";
            }
            if ($_SESSION["pts_o"] > 70) {
              echo"Obsessivo-Compulsivo: ".number_format($_SESSION["pts_o"],2)."%<br>";
            }
            if ($_SESSION["pts_p"] < 70 AND $_SESSION["pts_ee"] < 70 AND $_SESSION["pts_ea"] < 70 AND $_SESSION["pts_a"] < 70 AND $_SESSION["pts_b"] < 70 AND $_SESSION["pts_h"] < 70 AND $_SESSION["pts_n"] < 70 AND $_SESSION["pts_eo"] < 70 AND $_SESSION["pts_d"] < 70 AND $_SESSION["pts_o"]< 70) {
              echo"Seu teste não possui nenhum transtorno de personalidade com valor significativo.<br>";
            }
            ?>
            <br>
            <br>
            <p class="text-justify"> <br><br>Fique a vontade para conferir os valores completos do seu teste clicando no botão "Resultado completo".<br>
            Caso deseje receber os resultados do seu teste por e-mail, basta clicar <a href='mail.php'>aqui</a>.<br>
            ATENÇÃO! O teste não substitui a avaliação de um profissional, caso seja relevante procure auxílio especializado, saúde mental é uma questão muito importante!.<br><br></p>
        <button type="button" class="btn btn-secondary" style="background: rgb(35, 138, 145); color: #ffffff;" onclick="history.back()">Retornar</button>
        <a href="ResultadoTot.php">
        <button type="button" class="btn btn-secondary" style="background: rgb(35, 138, 145); color: #ffffff;">Resultado completo</button>
        </a>
         
         


</br></br></br></br>
<p class="text-justify">O CVV (Centro de Valorização da Vida) realiza apoio emocional e prevenção do suicídio, atendendo voluntária e gratuitamente todas as pessoas que querem e precisam conversar, sob total sigilo por telefone, email e chat 24 horas todos os dias, atendendo pelo número "188". Saiba mais clicando <a href="https://www.cvv.org.br/">aqui</a>.</p>
  </div>
     
     </div>
</br>
 <div class="container-fluid pt-2" style="background: rgb(35, 138, 145)";>
     <div class="row justify-content-center">
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/twitter-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Twitter</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/facebook-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Facebook</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/instagram-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Instagram</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/email.png" style="width: 16px; height: 13px; padding-right: 4px;">E-mail</a></div>
         <div class="col-md-3 pt-4 text-center" style="color: #ffffff;">Copyright 2020 - site por <a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><strong>Grupo ATC</strong></a></div>
     </div>
 </div>
 
 
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 <script>
 $(function(){ $('[data-toggle="tooltip"]').tooltip();})
 </script>
 </body>
 </html>
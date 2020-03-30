<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  include_once('php/funcoes.php')
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website de conteúdos - Séries iniciais (1º ao 5º ano) - SME - Canoinhas - SC</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" 
    integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" 
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/page-content.css">
</head>
<body>
  <header>
    <div><img src="logo.jpg" alt="Logo Canoinhas" ></div>
    <div><h1>Conteúdos do 3º ano</h1></div>
    <div id="content-back">
      <button id="button-back">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
      </button>
    </div>
  </header>
  <div class="container">
    <div class="content">
      <!-- Língua Portuguesa -->
      <div class="card">
        <div class="card-header"><h1>Língua Portuguesa</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Lingua Portuguesa/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

      <!-- Matemática -->
      <div class="card">
        <div class="card-header"><h1>Matemática</h1></div>
        <div class="card-content">
        <?php
          $path = "files/Iniciais/3 ano/Matematica/";

          $retorno = mount($path);

          if(is_array($retorno)){
            foreach($retorno as $vl) {
              echo $vl;
            }
          }

          ?>
        </div>
      </div>

      <!-- História -->
      <div class="card">
        <div class="card-header"><h1>História</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Historia/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

       <!-- Geografia -->
       <div class="card">
        <div class="card-header"><h1>Geografia</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Geografia/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

       <!-- Ciências -->
       <div class="card">
        <div class="card-header"><h1>Ciências</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Ciencias/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

       <!-- Ensino Religioso -->
       <div class="card">
        <div class="card-header"><h1>Ensino Religioso</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Ensino Religioso/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

       <!-- Arte -->
       <div class="card">
        <div class="card-header"><h1>Arte</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Arte/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

       <!-- Educação Física -->
       <div class="card">
        <div class="card-header"><h1>Educação Física</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 ano/Educacao Fisica/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

    </div>
  </div> 
  <script src="./js/navigator-content-iniciais.js"></script> 
</body>
</html>
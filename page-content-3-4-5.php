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
    <div><h1>Conteúdos do 3º, 4º e 5º ano</h1></div>
    <div id="content-back">
      <button id="button-back">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
      </button>
    </div>
  </header>
  <div class="container">
    <div class="content">
      <!-- Conteúdos -->
      <div class="card">
        <div class="card-header"><h1>Conteúdos</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Iniciais/3 4 e 5 ano/Conteudos/";

            $retorno = mount($path);

            if(is_array($retorno)){
              foreach($retorno as $vl) {
                echo $vl;
              }
            }

          ?>
        </div>
      </div>

      <!-- Leitura -->
      <div class="card">
        <div class="card-header"><h1>Para leitura</h1></div>
        <div class="card-content">
        <?php
          $path = "files/Iniciais/3 4 e 5 ano/Leitura/";

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
  <script src="./js/navigator-content-iniciais.js"></script> 
</body>
</html>
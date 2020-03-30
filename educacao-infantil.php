<!DOCTYPE html>
<html lang="pt-BR">
<?php 
  include_once('php/funcoes.php')
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website de conteúdos - Educação infantil - SME - Canoinhas - SC</title>
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
    <div><h1>Conteúdos Educação Infantil</h1></div>
    <div id="content-back">
      <button id="button-back">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
      </button>
    </div>
  </header>
  <div class="container">
    <div class="content">
    <div class="card">
        <div class="card-header"><h1>Conteúdos</h1></div>
        <div class="card-content">
          <?php
            $path = "files/Infantil/";

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
  
  <script src="./js/navigator-series-finais.js"></script>
</body>
</html>
<?php

  function mount($path) {

    $retorno = listFiles($path);

    $aux = 0;

    if(is_array($retorno)){
      foreach($retorno as $listar){
        $html[] = "<div id='item'><a href='download.php?path=$path&arquivo=$listar'>$listar</a></div>";
        $aux = $html;
      }
    } else {
      echo "<div id='item'><span>Não há arquivos</span></div>";
    } 

    return $aux;

  }

  function listFiles($diretorio){
    $ptr = opendir($diretorio);
    $rtr = 0;
    while($nome_itens = readdir($ptr)){
      if(($nome_itens[0] != '.') && (!is_dir($nome_itens))){
        $arquivos[] = $nome_itens;
        $rtr = $arquivos;
      }
    }
    return($rtr);
  }

?>
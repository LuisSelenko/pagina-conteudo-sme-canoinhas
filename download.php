<?php

  $path = $_GET["path"];
  $arquivo = $_GET["arquivo"];

  $arquivo_download = $path.$arquivo;
  
  header('Cache-control: private');
  header('Content-Type: application/octet-stream');
  header('Content-Length: '.filesize($arquivo_download));
  header('Content-Disposition: filename='.$arquivo);
  header("Content-Disposition: attachment; filename=".basename($arquivo_download));
  // Envia o arquivo Download
  readfile($arquivo_download);

?>
<?php

  $dbhost = 'Localhost';
  $dbUser = 'root';
  $dbpass = '';
  $dbName = 'jogui_cadastros';

  $conexao = new mysqli($dbhost, $dbUser, $dbpass, $dbName);

  /*if($conexao->connect_errno){
    echo "Erro";
  } else{
    echo "conexão efetuada co  sucesso";
  }*/

?>
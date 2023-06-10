<?php

  session_start();
  //print_r($_SESSION);

  /*validar se existe a senha e o email*/
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    /*se não existir email ou senha*/
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/sistema.css">
  <title>sistema</title>
</head>

<body>
  <nav class="nav-bar">
    <div class = "nav-contanier">
        <a href="#">SISTEMA</a>
        <a class="botao-sair" href="sair.php">Sair</a>
    </div>
  </nav>
  <br>
  <?php
  echo "<h1> Bem vindo $logado </h1>";
  ?>
</body>

</html>
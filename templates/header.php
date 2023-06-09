<?php
include_once("./config/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./CSS/style.css">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
 <title>Projeto formulário</title>
</head>

<body>
<header>
  <div class = "header-contanier">
    <div class = "logo">
     <a href="<?= $BASE_URL ?>">
      <img src="<?= $BASE_URL ?>/img/Group 31.svg" alt="marca">
     </a>
    </div>
    <nav>
      <ul class = "menu">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="planos.php">Planos</a></li>
        <li><a href="https://joaofelixss.github.io/">Nossos sites</a></li>
        <li><a href="login.php">Entrar</a></li>
        <li class= "cadastrese-botao"><a href="cadastro.php">CADASTRE-SE</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php
include_once('config/connection.php');
?>

<?php

  $validacoes = [];

  if(count($_POST) > 0){

    if($_POST['nome'] === ""){
      $validacoes[] = "Preencha seu nome";
    }

  if($_POST['senha'] === ""){
      $validacoes[] = "Preencha sua senha";
    }
  }
?>

<?php if(count($validacoes)): ?>

  <ul>
   <?php foreach($validacoes as $validacao): ?>
     <li><?= $validacao ?></li>
    <?php endforeach; ?>
  </ul>

<?php endif; ?>

</style>
<!DOCTYPE html>
<html lang="en pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/cadastro_login.css">
  <title>Login</title>
</head>

<body>
  <article class="cadastrese">
    <div class="contanier-cadastrese">
      <p>Ainda não possui cadastro?<a href="cadastro.php">Clique Aqui</a></p>
      <h1>Cadastre-se</h1>
      <form action="testeLogin.php" method = "POST">
        <div class="input-img">
          <img src="img/nome.png" alt="nome">
          <input type="text" name = "nome" placeholder = "Escreva seu nome">
        </div>
        <div class="input-img">
          <img src="img/senha.png" alt="senha">
          <input type="password" name = "senha" placeholder = "Escreva sua senha">
        </div>
        <div>
          <a href="index.php">Esqueceu sua senha?</a>
          <input class = "botao" type="submit" name= "submit" value = "Login">
        </div>
      </form>
    </div>
  </article>  
</body>

</html>
<?php
include_once('config/connection.php');
?>

<?php

  print_r($_POST['submit']);

?>

<?php

  $validacoes = [];

  if(count($_POST) > 0){

    if($_POST['nome'] === ""){
      $validacoes[] = "Preencha seu nome";
    }

  if($_POST['email'] === ""){
      $validacoes[] = "Preencha seu email";
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadastrese</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/cadastro_login.css">
</head>

<body>
  <article class="cadastrese">
    <div class="contanier-cadastrese">
      <p>Já possui cadastro? <a href="login.php">Clique Aqui</a></p>
      <h1>Cadastre-se</h1>
      <form action="cadastro.php" method = "POST">
          <div class="input-img">
            <img src="img/nome.png" alt="nome">
            <input type="text" name = "nome" placeholder = "Escreva seu nome">
          </div>
          <div class="input-img">
            <img src="img/senha.png" alt="nome">
            <input type="password" name = "senha" placeholder = "Escreva sua senha">
          </div>
          <div class="input-img">
            <img src="img/email.png" alt="nome">
            <input type="email" name = "email" placeholder = "Email">
          </div>
          <div class="input-img">
            <img src="img/telefone.png" alt="nome">
            <input type="text" name = "telefone" placeholder = "Telefone">
          </div>
          <div class="input-img">
            <img src="img/cidade.png" alt="nome">
            <input type="text" name = "cidade" placeholder = "Cidade">
          </div>
          <div class="input-img">
            <img src="img/estado.png" alt="nome">
            <input type="text" name = "estado" placeholder = "Estado">
          </div>
            <input class = "botao" type="submit" name= "submit" value = "Cadastrar">
          </div>
        </form>
    </div> 
 </article>
</body>

</html>

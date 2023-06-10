<?php
//se existir a variável submit
if(isset($_POST['submit']))
//ele vai salvar nosso banco de dados
{
  /*print_r('Nome: ' . $_POST['nome']);
  print_r('<br>');
  print_r('email: ' . $_POST['email']);
  print_r('<br>');
  print_r('senha: ' . $_POST['senha']);
  print_r('<br>');
  print_r('telefone: ' . $_POST['telefone']);
  print_r('<br>');
  print_r('cidade: ' . $_POST['cidade']);
  print_r('<br>');
  print_r('estado: ' . $_POST['estado']);*/

  include_once('config/connection.php');

  //agora vamos criar uma variável para cada dado
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

  //vamos conectar com a nossa conexão do banco e inserir os dados
  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, cidade, estado) VALUES ('$nome', '$senha', '$email', '$telefone', '$cidade', '$estado')");

  header('Location: login.php');
}

?>

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
            <input type="text" name = "nome" id="nome" placeholder = "Escreva seu nome">
          </div>
          <div class="input-img">
            <img src="img/senha.png" alt="senha">
            <input type="password" name = "senha" id="senha"  placeholder = "Escreva sua senha">
          </div>
          <div class="input-img">
            <img src="img/email.png" alt="email">
            <input type="email" name = "email" id="email" placeholder = "Email">
          </div>
          <div class="input-img">
            <img src="img/telefone.png" alt="telefone">
            <input type="text" name = "telefone" id="telefone" placeholder = "Telefone">
          </div>
          <div class="input-img">
            <img src="img/cidade.png" alt="cidade">
            <input type="text" name = "cidade" id="cidade" placeholder = "Cidade">
          </div>
          <div class="input-img">
            <img src="img/estado.png" alt="estado">
            <input type="text" name = "estado" id="estado" placeholder = "Estado">
          </div>
            <input class = "botao" type="submit" name= "submit" value = "Cadastrar">
          </div>
        </form>
    </div> 
 </article>
</body>

</html>

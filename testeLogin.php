<?php
session_start();
//print_r($_REQUEST);

//TEM QUE EXISTIR UM LOGIN E UMA senha
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //ACESSA
    include_once('config/connection.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

        /*print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/

    //seleciona no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'"; 
    $result = $conexao->query($sql);

       /* print_r($sql);
        print_r($result);*/

    //REQUISITOS PARA ACESSAR
    if(mysqli_num_rows($result) < 1)
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    } 
    else
    {
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header('Location: sistema.php');
    }
}
else
{
    //NÃO ACESSA
   header('Location: login.php');
}

?>
<?php
session_start();

//TEM QUE EXISTIR UM LOGIN E UMA senha
if(!empty($_POST['email']) && isset($_POST['submit']) && !empty($_POST['senha']))
{
  //ACESSA
  include_once('config/connection.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //seleciona no banco de dados
  $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'"; 
  $result = $conexao->query($sql);

  //REQUISITOS PARA ACESSAR
  if(mysqli_num_rows($result) < 1)
  {
    unset($_SESSION['eamil']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  } 
  else
  {
    unset($_SESSION['eamil']);
    unset($_SESSION['senha']);
    header('Location: sistema.php');
  }

}
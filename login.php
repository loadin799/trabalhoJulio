<?php
require_once('./bancoDeDados/mysql.php');

  $login = $_POST['email'];
  $senha = $_POST['password'];
  $mysql = new mysql();
  $mysql->validaLogin($login,$senha);

 
// echo $login;
// echo $senha;

?>
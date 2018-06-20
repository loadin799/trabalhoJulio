<?php

class mysql 
{
    var $myCon = "";
    
    function Conecta()
    {
    $connection =  mysqli_connect('localhost','root','','sistemaprofessor');

    if(!$connection)
    {
        echo "Erro ao conectar ao banco de dados";
    }

    else{

        $this->myCon =  $connection;
        return $this->myCon;
    }
        
    }

    function fechar($myConnection)
    {
        mysqli_close($myConnection);
    }

    function validaLogin($login,$senha)
    {
        $connect = new mysql;
        $connect->conecta();
  
        $verifica = mysqli_query($connect->myCon,"SELECT * FROM tb_usuarios WHERE tx_login = '$login' AND tx_senha = '$senha'") or die("erro ao selecionar");
        
        if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript'type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='./index.php';</script>";
            die();
          }else{
           
            header("Location:./dashboard.php");
            
            }
          
            //header("Location:../Views/home.php");

            $connect->fechar($connect->myCon);
          
    }
}

?> 
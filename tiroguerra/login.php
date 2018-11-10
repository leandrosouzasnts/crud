<?php
include "conexao.php";

    $user = trim($_POST['usuario']);
    $pwd = trim($_POST['password']);

    $sql = ("SELECT * FROM  usuario where user like '$user'");
    $rs = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_array($rs); 
    //echo $linha['user'] . " - " . $linha['pwd']; 

    if ($user==$linha['user']){

            if ($pwd==$linha['senha']){
            session_start(); 

            $_SESSION['user'] = $user; 
            
            header('location:cadastro.php'); 
            }else { echo "Usuario e senha não são iguais"; 
             header('location: login.html');
            }
        }else { echo "Usuário não existe";
  }
?>
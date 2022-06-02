<?php

    $usuario = strtolower($_POST['usuario']);
    $senha = strtolower($_POST['senha']);

    $verify_user = ['andrey','admin'];
    $verify_pass = [1234,'admin'];

    if(($usuario==$verify_user[0])&&($senha==$verify_pass[0])){
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['acess']=1;
        header("Location: secret.php");
    }else{
        header("Location: index.php");
    }




?>
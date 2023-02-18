<?php
$error;

session_start();
if(!empty($_POST['usuario'])&&!empty($_POST['password'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    if($usuario=="cliente"&&$password=="123"){
        $error="CORRECTO";
        $_SESSION['usuario']=$usuario;
            header("Location: cliente.php");
    }else if($usuario=="administrador"&&$password=="asd"){
        $error="CORRECTO";
        $_SESSION['usuario']=$usuario;
        header("Location: administrador.php");
    }else{
        $error="CREDENCIALESINCORRECTAS";
        header("Location: index.php?error=$error");
    }
}else{
    $error="CAMPOSVACIOS";
        header("Location: index.php?error=$error");
}

?>
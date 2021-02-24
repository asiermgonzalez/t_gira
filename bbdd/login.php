<?php

//Conexión con la BBDD
require_once 'conexion.php';

//Recibir los parámetros del formulario y escapar los caracteres extraños para evitar inyección SQL
$email=mysqli_real_escape_string($conexion, $_POST['email']);
$password=mysqli_real_escape_string($conexion, $_POST['password']);

//Comprobar si es administrador o usuario
$consulta=mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' AND password='$password'");

//Si no hay resultado mandar al login
if($consulta && mysqli_num_rows($consulta)==0){
    session_start();
    $_SESSION['login_incorrecto']="Usuario y/o Contraseña incorrecto";
    $conexion->close();
    header('Location:../index.php');
}else{

    //Si devuelve 1 es que el usuario está registrado
    if($consulta && mysqli_num_rows($consulta)==1){

        $usuario=mysqli_fetch_assoc($consulta);

        //Administrador
        if($usuario['rol']=='admin'){
            session_start();
            $_SESSION['admin']=$usuario['nombre'];
            $conexion->close();
            header('Location:../menu_administrador.php');
        }else{
            //Usuario
            session_start();
            $_SESSION['usuario']=$usuario['nombre'];
            $conexion->close();
            header('Location:../menu_usuario.php');
        }
    }
}


<?php

//CONEXION
require_once 'conexion.php';

//RECIBIR LOS PARAMETROS DEL FORMULARIO Y ESCAPAR LOS DATOS PARA EVITAR INYECCION SQL
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$password = mysqli_real_escape_string($conexion, $_POST['password']);

//COMPROBAR SI EXISTE EL EMAIL
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

if ($consulta && mysqli_num_rows($consulta) == 1) {

    $usuario = mysqli_fetch_assoc($consulta);

    //COMPROBAR LA CONTRASEÑA
    $verify = password_verify($password, $usuario['password']);

    if ($verify) {

        //Administrador
        if ($usuario['rol'] == 'ADMINISTRADOR') {
            session_start();
            $_SESSION['admin'] = $usuario['nombre'];
            $conexion->close();
            header('Location:../menu_administrador.php');
        } else {
            //Usuario
            session_start();
            $_SESSION['usuario'] = $usuario['nombre'];
            $conexion->close();
            header('Location:../menu_usuario.php');
        }
    }
    //LOGIN NO ES CORRECTO
    else {
        session_start();
        $_SESSION['login_incorrecto'] = "Usuario y/o Contraseña incorrecto";
        $conexion->close();
        header('Location:../index.php');
    }
}
//NO EXISTE EL EMAIL
else {
    session_start();
    $_SESSION['login_incorrecto'] = "Usuario y/o Contraseña incorrecto";
    $conexion->close();
    header('Location:../index.php');
}

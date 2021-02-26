<?php

//CONEXION CON LA BBDD ALERTAS Y CLASE USUARIO
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once '../clases/Usuario.php';

//RECIBIR LOS PARAMETROS
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['nombre'])) {
    $nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));
}

if (isset($_POST['apellido'])) {
    $apellido = strtoupper(mysqli_real_escape_string($conexion, $_POST['apellido']));
}

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
}

if (isset($_POST['telefono'])) {
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
}

if(isset($_POST['password'])){
    $password = mysqli_real_escape_string($conexion, $_POST['password']);
    //ENCRIPTAR CLAVE
    $password_segura=password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
}

if(isset($_POST['rol'])){
    $rol = mysqli_real_escape_string($conexion, $_POST['rol']);
}

$opcion=0;

//EN FUNCION DEL PARAMETRO QUE RECIBAMOS LE ASIGNAMOS UN VALOR A $opcion
if(isset($_POST['crear_usuario'])){
    $opcion=1;
}

switch($opcion){
     /*********************************************** CREAR OPCION ************************************************/
     case 1:

        //CREAMOS UN OBJETO USUARIO
        $usuario=new Usuario(null, $email, $password_segura, $nombre, $apellido, $telefono, $rol, $conexion);

        //LLAMAMOS A LA FUNCION crearUsuario
        $usuario->crearUsuario(
            $usuario->getEmail(),
            $usuario->getPassword(),
            $usuario->getNombre(),
            $usuario->getApellido(),
            $usuario->getTelefono(),
            $usuario->getRol(),
            $conexion
        );

        //CERRAR LA CONEXION
        $conexion->close();

        //REDIRIGIR AL MENU
        header('Location:../usuarios.php');

}







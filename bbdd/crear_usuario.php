<?php

require_once 'conexion.php';
require_once '../clases/usuario.php';

$email=mysqli_real_escape_string($conexion, $_POST['email']);
$password=mysqli_real_escape_string($conexion, $_POST['password']);
$nombre=mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido=mysqli_real_escape_string($conexion, $_POST['apellido']);
$telefono=mysqli_real_escape_string($conexion, $_POST['telefono']);
$rol=mysqli_real_escape_string($conexion, $_POST['rol']);

$usuario=new Usuario($email, $password, $nombre, $apellido, $telefono, $rol);

$usuario->crearUsuario($usuario->getEmail(), $usuario->getPassword(), $usuario->getNombre(), $usuario->getApellido(), $usuario->getTelefono(), $usuario->getRol(), $conexion);

$conexion->close();

header('Location:../administrador/menu_administrador.php');


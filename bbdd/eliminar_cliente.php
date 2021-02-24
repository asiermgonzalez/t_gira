<?php

require_once 'conexion.php';
require_once '../clases/cliente.php';
require_once '../includes/alertas.php';

//Recibimos los parámetros
$id=$_GET['id'];

//$cliente=new Cliente($id, null, null, null, null, null, null, null ,null);

//Eliminamos el cliente
$eliminar=mysqli_query($conexion, "DELETE FROM clientes WHERE id='$id'");

//Creamos una sesión para el mensaje de alerta
if($eliminar){
    session_start();
    eliminar_alertas();
    $_SESSION['cliente_eliminado']='Ok';
}

//Cerramos la conexión
$conexion->close();

//Redirigimos al menú administrador
header('Location:../menu_administrador.php');


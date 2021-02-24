<?php

//CONEXION CON LA BBDD
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once '../clases/Usuario.php';
//require_once 'funciones.php';

//RECIBIR LOS PARAMETROS
/*
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['nombre'])) {
    $nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));
}

if (isset($_POST['f1'])) {
    $f1 = mysqli_real_escape_string($conexion, $_POST['f1']);
}
*/
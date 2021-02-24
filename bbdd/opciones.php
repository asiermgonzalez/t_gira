<?php

//Conexión con la BBDD
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once 'funciones.php';

$opcion = 0;

if (isset($_POST['crear_tarea'])) {
    $opcion = 1;
}

if (isset($_POST['modificar_tarea'])) {
    $opcion = 2;
}

if (isset($_GET['eliminar_tarea'])) {
    $opcion = 3;
}

if (isset($_POST['crear_usuario'])) {
    $opcion = 4;
}



switch ($opcion) {

    case 1:

        crear_tarea($conexion);

        break;

    case 2:

        $id = $_GET['id'];

        modificar_tarea($id, $conexion);

        break;

    case 3:

        $id = $_GET['id'];

        eliminar_tarea($id, $conexion);

        break;

    case 4:

        crear_usuario($conexion);

        break;
}

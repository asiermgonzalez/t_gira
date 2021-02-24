<?php

//CONEXION CON LA BBDD
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once '../clases/Tarea.php';
//require_once 'funciones.php';

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

if (isset($_POST['f1'])) {
    $f1 = mysqli_real_escape_string($conexion, $_POST['f1']);
}

if (isset($_POST['f2'])) {
    $f2 = mysqli_real_escape_string($conexion, $_POST['f2']);
}

if (isset($_POST['f3'])) {
    $f3 = mysqli_real_escape_string($conexion, $_POST['f3']);
}

if (isset($_POST['f4'])) {
    $f4 = mysqli_real_escape_string($conexion, $_POST['f4']);
}

if (isset($_POST['f5'])) {
    $f5 = mysqli_real_escape_string($conexion, $_POST['f5']);
}

if (isset($_POST['f6'])) {
    $f6 = mysqli_real_escape_string($conexion, $_POST['f6']);
}

if (isset($_POST['f7'])) {
    $f7 = mysqli_real_escape_string($conexion, $_POST['f7']);
}

if (isset($_POST['f8'])) {
    $f8 = mysqli_real_escape_string($conexion, $_POST['f8']);
}

if (isset($_POST['f9'])) {
    $f9 = mysqli_real_escape_string($conexion, $_POST['f9']);
}

if (isset($_POST['f10'])) {
    $f10 = mysqli_real_escape_string($conexion, $_POST['f10']);
}

if (isset($_POST['f11'])) {
    $f11 = mysqli_real_escape_string($conexion, $_POST['f11']);
}

if (isset($_POST['f12'])) {
    $f12 = mysqli_real_escape_string($conexion, $_POST['f12']);
}

$opcion = 0;

//EN FUNCION DEL PARAMETRO QUE RECIBAMOS LE ASIGNAMOS UN VALOR A $opcion
if (isset($_POST['crear_tarea'])) {
    $opcion = 1;
}

if (isset($_POST['modificar_tarea'])) {
    $opcion = 2;
}

if (isset($_GET['eliminar_tarea'])) {
    $opcion = 3;
}

if (isset($_POST['asignar_tarea'])) {
    $opcion = 4;
}



switch ($opcion) {

        /*********************************************** CREAR TAREA ************************************************/
    case 1:

        //CREAMOS UN OBJETO TAREA
        $tarea = new Tarea(null, $nombre, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $conexion);

        //LLAMAMOS A LA FUNCION crearTarea
        $tarea->crearTarea(
            $tarea->getNombre(),
            $tarea->getF1(),
            $tarea->getF2(),
            $tarea->getF3(),
            $tarea->getF4(),
            $tarea->getF5(),
            $tarea->getF6(),
            $tarea->getF7(),
            $tarea->getF8(),
            $tarea->getF9(),
            $tarea->getF10(),
            $tarea->getF11(),
            $tarea->getF12(),
            $conexion
        );

        //Cerrar la conexión con la bbdd
        $conexion->close();

        //Redirigir al menú del administrador
        header('Location:../tareas.php');

        break;

        /*********************************************** MODIFICAR TAREA ************************************************/
    case 2:

        $tarea = new Tarea($id, $nombre, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $conexion);

        //LLAMAMOS A LA FUNCION modificarTarea
        $tarea->modificarTarea(
            $tarea->getId(),
            $tarea->getNombre(),
            $tarea->getF1(),
            $tarea->getF2(),
            $tarea->getF3(),
            $tarea->getF4(),
            $tarea->getF5(),
            $tarea->getF6(),
            $tarea->getF7(),
            $tarea->getF8(),
            $tarea->getF9(),
            $tarea->getF10(),
            $tarea->getF11(),
            $tarea->getF12(),
            $conexion
        );

        //CERRAR LA CONEXION
        $conexion->close();

        //Redirigir al menú del administrador
        header('Location:../tareas.php');

        break;

        /*********************************************** ELIMINAR TAREA ************************************************/
    case 3:

        $id = $_GET['id'];

        $tarea = new Tarea($id, null, null, null, null, null, null, null, null, null, null, null, null, null);

        $tarea->eliminarTarea($id, $conexion);

        //Cerrar la conexión con la bbdd
        $conexion->close();

        //Redirigir al menú del administrador
        header('Location:../tareas.php');

        break;

        /*********************************************** ASIGNAR TAREA ************************************************/
    case 4:

        $nombre = $_GET['nombre'];
        $usuario = $_POST['usuario'];
        $cliente=$_POST['cliente'];

        $asignar_tarea = mysqli_query($conexion, "INSERT INTO tareas VALUES(NULL, '$usuario', '$nombre', '$cliente', curdate(), 'PENDIENTE')");

        //Creamos una sesión para el mensaje de alerta
        if ($asignar_tarea) {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_asignada'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_asignada_error'] = "ERROR";
        }

        header('Location:../tareas.php');

        break;
}

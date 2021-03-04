<?php

//CONEXION CON LA BBDD ALERTAS Y CLASE CLIENTES
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once '../clases/Cliente.php';

//RECIBIR LOS PARAMETROS
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

else if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

else{

    $id=null;
}

if (isset($_POST['nombre'])) {
    $nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));
}

if (isset($_POST['persona_contacto'])) {
    $persona_contacto = strtoupper(mysqli_real_escape_string($conexion, $_POST['persona_contacto']));
}

if (isset($_POST['movil'])) {
    $movil = mysqli_real_escape_string($conexion, $_POST['movil']);
}

if (isset($_POST['telefono1'])) {
    $telefono1 = mysqli_real_escape_string($conexion, $_POST['telefono1']);
}

if (isset($_POST['telefono2'])) {
    $telefono2 = mysqli_real_escape_string($conexion, $_POST['telefono2']);
}

if (isset($_POST['email1'])) {
    $email1 = mysqli_real_escape_string($conexion, $_POST['email1']);
}

if (isset($_POST['email2'])) {
    $email2 = mysqli_real_escape_string($conexion, $_POST['email2']);
}

if (isset($_POST['direccion'])) {
    $direccion = strtoupper(mysqli_real_escape_string($conexion, $_POST['direccion']));
}

if (isset($_POST['cp'])) {
    $cp = mysqli_real_escape_string($conexion, $_POST['cp']);
}

if (isset($_POST['poblacion'])) {
    $poblacion = strtoupper(mysqli_real_escape_string($conexion, $_POST['poblacion']));
}

if (isset($_POST['provincia'])) {
    $provincia = mysqli_real_escape_string($conexion, $_POST['provincia']);
}


$opcion = 0;

//EN FUNCION DEL PARAMETRO QUE RECIBAMOS LE ASIGNAMOS UN VALOR A $opcion
if (isset($_POST['crear_cliente'])) {
    $opcion = 1;
}

if (isset($_POST['modificar_cliente'])) {
    $opcion = 2;
}

if (isset($_GET['eliminar_cliente'])) {
    $opcion = 3;
}


switch ($opcion) {

        /*********************************************** CREAR CLIENTE ************************************************/
    case 1:

        //CREAMOS UN OBJETO TAREA
        $cliente = new Cliente(null, $nombre, $persona_contacto, $movil, $telefono1, $telefono2, $email1, $email2, $direccion, $cp, $poblacion, $provincia, $notas, $conexion);

        //LLAMAMOS A LA FUNCION crearTarea
        $cliente->crearCliente(
            $cliente->getNombre(),
            $cliente->getPersona_contacto(),
            $cliente->getMovil(),
            $cliente->getTelefono(),
            $cliente->getTelefono2(),
            $cliente->getEmail(),
            $cliente->getEmail2(),
            $cliente->getDireccion(),
            $cliente->getCp(),
            $cliente->getPoblacion(),
            $cliente->getProvincia(),
            $cliente->getNotas(),
            $conexion
        );

        //Cerrar la conexión con la bbdd
        $conexion->close();

        //Redirigir al menú del administrador
        header('Location:../clientes.php');

        break;

        /*********************************************** MODIFICAR CLIENTE ************************************************/
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
        $cliente = $_POST['cliente'];

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

        $conexion->close();

        header('Location:../tareas.php');

        break;

        /*********************************************** ELIMINAR TAREA ASIGNADA ************************************************/
    case 5:

        $id = $_GET['eliminar_tarea_asignada'];

        $eliminar = mysqli_query($conexion, "DELETE FROM tareas WHERE id='$id'");

        //Creamos una sesión para el mensaje de alerta
        if ($eliminar) {
            session_start();
            eliminar_alertas();
            $_SESSION['eliminar_tarea_asignada'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['eliminar_tarea_asignada_error'] = "ERROR";
        }

        $conexion->close();

        header('Location:../tareas_asignadas.php');

        break;

        /*********************************************** TAREA FINALIZADA *************************************************************/
    case 6:

        $id = $_GET['id_tarea_finalizada'];

        $finalizar_tarea = mysqli_query($conexion, "UPDATE tareas SET estado='REALIZADO' WHERE id='$id'");

        //Creamos una sesión para el mensaje de alerta
        if ($finalizar_tarea) {
            session_start();
            eliminar_alertas();
            $_SESSION['terminar_tarea'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['terminar_tarea_error'] = "ERROR";
        }

        $conexion->close();

        header('Location:../menu_usuario.php');

        break;
}

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

if (isset($_POST['notas'])) {
    $notas = mysqli_real_escape_string($conexion, $_POST['notas']);
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

        //Redirigir al menú de clientes
        header('Location:../clientes.php');

        break;

        /*********************************************** MODIFICAR CLIENTE ************************************************/
    case 2:

        $cliente = new Cliente($id, $nombre, $persona_contacto, $movil, $telefono1, $telefono2, $email1, $email2, $direccion, $cp, $poblacion, $provincia, $notas, $conexion);

        //LLAMAMOS A LA FUNCION modificarCliente
        $cliente->modificarCliente(
            $cliente->getId(),
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

        //CERRAR LA CONEXION
        $conexion->close();

        //Redirigir al menú de clientes
        header('Location:../clientes.php');

        break;

        /*********************************************** ELIMINAR CLIENTE ************************************************/
    case 3:

        $id = $_GET['id'];

        $cliente = new Cliente($id, null, null, null, null, null, null, null, null, null, null, null, null);

        $cliente->eliminarCliente($id, $conexion);

        //Cerrar la conexión con la bbdd
        $conexion->close();

        //Redirigir al menú de clientes
        header('Location:../clientes.php');

        break;

}

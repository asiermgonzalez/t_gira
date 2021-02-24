<?php
//Llamamos a la conexión
require_once 'conexion.php';
//Llamamos a la clase y sus funciones
require_once '../clases/cliente.php';
//Alertas
require_once '../includes/alertas.php';

//Recibimos los parámetros y escapamos los caracteres especiales para evitar inyeccón sql
$nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));
$persona = strtoupper(mysqli_real_escape_string($conexion, $_POST['persona']));
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$direccion = strtoupper(mysqli_real_escape_string($conexion, $_POST['direccion']));
$cp = mysqli_real_escape_string($conexion, $_POST['cp']);
$poblacion = strtoupper(mysqli_real_escape_string($conexion, $_POST['poblacion']));
$provincia = strtoupper(mysqli_real_escape_string($conexion, $_POST['provincia']));

//Creamos un cliente nuevo
$cliente = new Cliente(null, $nombre, $persona, $telefono, $email, $direccion, $cp, $poblacion, $provincia);

//Lo guardamos en la tabla clientes
$guardar = $cliente->crearCliente(
    $cliente->getNombre(),
    $cliente->getPersona_contacto(),
    $cliente->getTelefono(),
    $cliente->getEmail(),
    $cliente->getDireccion(),
    $cliente->getCp(),
    $cliente->getPoblacion(),
    $cliente->getProvincia(),
    $conexion
);

session_start();
eliminar_alertas();
$_SESSION['cliente_creado'] = 'Cliente creado';

//Cerramos la conexión
$conexion->close();

//Redirigimos al menú de administrador
header('Location:../menu_administrador.php');

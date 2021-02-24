<?php

require_once 'conexion.php';

$cliente=mysqli_real_escape_string($conexion, $_POST['cliente']);
$empleado=mysqli_real_escape_string($conexion, $_POST['empleado']);

$crear_tarea=mysqli_query($conexion, "INSERT INTO trabajos VALUES(NULL, '$empleado', '$cliente', 'INSTALAR TIENDA VIRTUAL')");

$conexion->close();

header('Location:../administrador/menu_administrador.php');
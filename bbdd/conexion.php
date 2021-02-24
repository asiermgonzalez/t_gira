<?php

$servidor='localhost';
$usuario='root';
$password='admin';
$bbdd='tareas';

$conexion=mysqli_connect($servidor, $usuario, $password, $bbdd);

if($conexion->connect_errno){

    echo"Falló la conexión";
}

$conexion->set_charset("utf8");
<?php

//CONEXION CON LA BBDD ALERTAS Y CLASE TAREA
require_once 'conexion.php';
require_once '../includes/alertas.php';
require_once '../clases/Configuracion.php';

//RECIBIR LOS PARAMETROS
if (isset($_POST['modificar_configuracion'])) {
        
    $id = $_GET['id'];
    $color_cabecera=mysqli_real_escape_string($conexion, $_POST['color_cabecera']);
    $color_texto_cabecera=mysqli_real_escape_string($conexion, $_POST['color_texto_cabecera']);
    $color_borde_cabecera=mysqli_real_escape_string($conexion, $_POST['color_borde_cabecera']);
    $logotipo_cabecera=mysqli_real_escape_string($conexion, $_POST['logotipo_cabecera']);
    $color_cuerpo=mysqli_real_escape_string($conexion, $_POST['color_cuerpo']);
    $color_pie=mysqli_real_escape_string($conexion, $_POST['color_pie']);
    $color_texto_pie=mysqli_real_escape_string($conexion, $_POST['color_texto_pie']);
    $color_borde_pie=mysqli_real_escape_string($conexion, $_POST['color_borde_pie']);
    $color_fondo_tabla=mysqli_real_escape_string($conexion, $_POST['color_fondo_tabla']);

    //MODIFICAR CONFIGURACION
    $configuracion=new Configuracion($id, $color_cabecera, $color_texto_cabecera, $color_borde_cabecera, $logotipo_cabecera, $color_cuerpo, $color_pie, $color_texto_pie, $color_borde_pie, $color_fondo_tabla);

    $configuracion->modificarConfiguracion(
        $configuracion->getId(),
        $configuracion->getColorCabecera(),
        $configuracion->getColorTextoCabecera(),
        $configuracion->getColorBordeCabecera(),
        $configuracion->getLogotipoCabecera(),
        $configuracion->getColorCuerpo(),
        $configuracion->getColorPie(),
        $configuracion->getColorTextoPie(),
        $configuracion->getColorBordePie(),
        $configuracion->getColorFondoTabla(),
        $conexion
    );

     //Cerrar la conexión con la bbdd
     $conexion->close();

     //Redirigir al menú de configuración
     header('Location:../configuracion.php');
}

else{

    $conexion->close();
    header('Location:../menu_administrador.php');
}


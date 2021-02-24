<?php

//*** CREAR TAREA ***
function crear_tarea($conexion)
{

    //Recibir los datos del formulario y escapar los caracteres especiales para evitar inyección sql
    //El nombre de la tarea lo convertimos siempre a mayúsculas. Los demás no porque puede haber contraseñas y nombres de usuario.
    $nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));

    //Comprobar si existen funciones al no ser un campo requerido
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

    $insertar = mysqli_query($conexion, "INSERT INTO tarea VALUES(NULL, '$nombre', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$f12')");

    if ($insertar) {
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_creada'] = "Se ha creado la tarea";
    }else{
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_creada_error']="ERROR";
    }

    //Cerrar la conexión con la bbdd
    $conexion->close();

    //Redirigir al menú del administrador
    header('Location:../tareas.php');
}


//*** MODIFICAR TAREA ***
function modificar_tarea($id, $conexion)
{
    $nombre = strtoupper(mysqli_real_escape_string($conexion, $_POST['nombre']));
    $f1 = mysqli_real_escape_string($conexion, $_POST['f1']);
    $f2 = mysqli_real_escape_string($conexion, $_POST['f2']);
    $f3 = mysqli_real_escape_string($conexion, $_POST['f3']);
    $f4 = mysqli_real_escape_string($conexion, $_POST['f4']);
    $f5 = mysqli_real_escape_string($conexion, $_POST['f5']);
    $f6 = mysqli_real_escape_string($conexion, $_POST['f6']);
    $f7 = mysqli_real_escape_string($conexion, $_POST['f7']);
    $f8 = mysqli_real_escape_string($conexion, $_POST['f8']);
    $f9 = mysqli_real_escape_string($conexion, $_POST['f9']);
    $f10 = mysqli_real_escape_string($conexion, $_POST['f10']);
    $f11 = mysqli_real_escape_string($conexion, $_POST['f11']);
    $f12 = mysqli_real_escape_string($conexion, $_POST['f12']);

    $modificar=mysqli_query($conexion, "UPDATE tarea SET nombre='$nombre', f1='$f1', f2='$f2', f3='$f3', f4='$f4', f5='$f5', f6='$f6', f7='$f7', f8='$f8', f9='$f9', f10='$f10', f11='$f11', f12='$f12' WHERE id=$id");

    //Creamos una sesión para el mensaje de alerta
    if ($modificar) {
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_modificada'] = 'Ok';
    }else{
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_modificada_error']="ERROR";
    }

    //Cerramos la conexión
    $conexion->close();

    //Redirigimos al menú administrador
    header('Location:../tareas.php');
}


//*** ELIMINAR TAREA ***
function eliminar_tarea($id, $conexion)
{
    //Eliminamos el cliente
    $eliminar = mysqli_query($conexion, "DELETE FROM tarea WHERE id=$id");

    //Creamos una sesión para el mensaje de alerta
    if ($eliminar) {
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_eliminada'] = 'Ok';
    }else{
        session_start();
        eliminar_alertas();
        $_SESSION['tarea_eliminada_error']="ERROR";
    }

    //Cerramos la conexión
    $conexion->close();

    //Redirigimos al menú administrador
    header('Location:../tareas.php');
}


//*** CREAR USUARIO ***
function crear_usuario($conexion){

    //Recoger datos y escapar caracteres extraños
    $email=mysqli_real_escape_string($conexion, $_POST['email']);
    $password=mysqli_real_escape_string($conexion, $_POST['password']);
    $nombre=mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido=mysqli_real_escape_string($conexion, $_POST['apellido']);
    $telefono=mysqli_real_escape_string($conexion, $_POST['telefono']);
    $rol=mysqli_real_escape_string($conexion, $_POST['rol']);

    //Guardar usuario
    $insertar=mysqli_query($conexion, "INSERT INTO usuarios VALUES(NULL, '$email', '$password', '$nombre', '$apellido', '$telefono', '$rol')");

    //Creamos una sesión para el mensaje de alerta
    if ($insertar) {
        session_start();
        eliminar_alertas();
        $_SESSION['crear_usuario'] = 'Ok';
    }else{
        session_start();
        eliminar_alertas();
        $_SESSION['crear_usuario_error']="ERROR";
    }

    //Cerramos la conexión
    $conexion->close();

    //Redirigimos al menú administrador
    header('Location:../menu_administrador.php');

}

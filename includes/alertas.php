<?php

function eliminar_alertas()
{
    //ALERTA TAREA CREADA
    if (isset($_SESSION['tarea_creada'])) {
        unset($_SESSION['tarea_creada']);
    }

    //ALERTA CREADA ERROR
    if (isset($_SESSION['tarea_creada_error'])) {
        unset($_SESSION['tarea_creada_error']);
    }

    //ALERTA TAREA MODIFICADA
    if (isset($_SESSION['tarea_modificada'])) {
        unset($_SESSION['tarea_modificada']);
    }

    //ALERTA TAREA MODIFICADA ERROR
    if (isset($_SESSION['tarea_modificada_error'])) {
        unset($_SESSION['tarea_modificada_error']);
    }

    //ALERTA TAREA ELIMINADA
    if (isset($_SESSION['tarea_eliminada'])) {
        unset($_SESSION['tarea_eliminada']);
    }

    //ALERTA TAREA ELIMINADA ERROR
    if (isset($_SESSION['tarea_eliminada_error'])) {
        unset($_SESSION['tarea_eliminada_error']);
    }

     //ALERTA TAREA ASIGNADA
     if (isset($_SESSION['tarea_asignada'])) {
        unset($_SESSION['tarea_asignada']);
    }

    //ALERTA TAREA ASIGNADA ERROR
    if (isset($_SESSION['tarea_asignada_error'])) {
        unset($_SESSION['tarea_asignada_error']);
    }


    //ALERTA CREAR USUARIO
    if (isset($_SESSION['crear_usuario'])) {
        unset($_SESSION['crear_usuario']);
    }

     //ALERTA CREAR USUARIO ERROR
     if (isset($_SESSION['crear_usuario_error'])) {
        unset($_SESSION['crear_usuario_error']);
    }

    //ALERTA CLIENTE CREADO
    if (isset($_SESSION['cliente_creado'])) {
        unset($_SESSION['cliente_creado']);
    }

    //ALERTA CLIENTE ELIMINADO
    if (isset($_SESSION['cliente_eliminado'])) {
        unset($_SESSION['cliente_eliminado']);
    }
}

function mostrar_alertas()
{

    //ALERTA TAREA CREADA
    if (isset($_SESSION['tarea_creada'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado una nueva tarea</div>";
    }

    //ALERTA TAREA CREADA ERROR
    if (isset($_SESSION['tarea_creada_error'])) {
        echo "<div class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido crear la tarea</div>";
    }

    //ALERTA TAREA MODIFICADA
    if (isset($_SESSION['tarea_modificada'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha modificado la tarea</div>";
    }

    //ALERTA TAREA MODIFICADA ERROR
    if (isset($_SESSION['tarea_modificada_error'])) {
        echo "<div class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido modificar la tarea</div>";
    }

    //ALERTA TAREA ELIMINADA
    if (isset($_SESSION['tarea_eliminada'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado la tarea seleccionada</div>";
    }

    //ALERTA TAREA ELIMINADA ERROR
    if (isset($_SESSION['tarea_eliminada_error'])) {
        echo "<div class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido eliminar la tarea</div>";
    }

     //ALERTA TAREA ASIGNADA
     if (isset($_SESSION['tarea_asignada'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha asignadao la tarea</div>";
    }

    //ALERTA TAREA ASIGNADA ERROR
    if (isset($_SESSION['tarea_asignada_error'])) {
        echo "<div class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido asignar la tarea</div>";
    }

    //ALERTA CREAR USUARIO
    if (isset($_SESSION['crear_usuario'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado un nuevo usuario</div>";
    }

    //ALERTA CREAR USUARIO ERROR
    if (isset($_SESSION['crear_usuario_error'])) {
        echo "<div class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido crear el usuario</div>";
    }

    //ALERTA CLIENTE CREADO
    if (isset($_SESSION['cliente_creado'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado un nuevo cliente</div>";
    }

    //ALERTA CLIENTE ELIMINADO
    if (isset($_SESSION['cliente_eliminado'])) {
        echo "<div class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado el cliente seleccionado</div>";
    }
}

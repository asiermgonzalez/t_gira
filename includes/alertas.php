<?php

/** FUNCION PARA ELIMINAR LAS ALERTAS */

function eliminar_alertas()
{
    /*******************************************TAREAS *********************************/

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

    /******************************************USUARIOS *****************************************************/

    //ALERTA CREAR USUARIO
    if (isset($_SESSION['crear_usuario'])) {
        unset($_SESSION['crear_usuario']);
    }

    //ALERTA CREAR USUARIO ERROR
    if (isset($_SESSION['crear_usuario_error'])) {
        unset($_SESSION['crear_usuario_error']);
    }

    //ALERTA CLIENTE ELIMINADO
    if (isset($_SESSION['cliente_eliminado'])) {
        unset($_SESSION['cliente_eliminado']);
    }

    //ALERTA TAREA ASIGNADA ELIMINADA
    if (isset($_SESSION['eliminar_tarea_asignada'])) {
        unset($_SESSION['eliminar_tarea_asignada']);
    }

    //ALERTA TAREA ASIGNADA ELIMINADA ERROR
    if (isset($_SESSION['eliminar_tarea_asignada_error'])) {
        unset($_SESSION['eliminar_tarea_asignada_error']);
    }

    //ALERTA TAREA TERMINADA
    if (isset($_SESSION['terminar_tarea'])) {
        unset($_SESSION['terminar_tarea']);
    }

    //ALERTA TAREA TERMINADA ERROR
    if (isset($_SESSION['terminar_tarea_error'])) {
        unset($_SESSION['terminar_tarea_error']);
    }

    //ALERTA USUARIO MODIFICADO
    if (isset($_SESSION['usuario_modificado'])) {
        unset($_SESSION['usuario_modificado']);
    }

    //ALERTA USUARIO MODIFICADO ERROR
    if (isset($_SESSION['usuario_modificado_error'])) {
        unset($_SESSION['usuario_modificado_error']);
    }

    //ALERTA USUARIO ELIMINADO
    if (isset($_SESSION['usuario_eliminado'])) {
        unset($_SESSION['usuario_eliminado']);
    }

    //ALERTA USUARIO ELIMINADO ERROR
    if (isset($_SESSION['usuario_eliminado_error'])) {
        unset($_SESSION['usuario_eliminado_error']);
    }

    /************************************************CLIENTES ******************************************************/

    //ALERTA CLIENTE CREADO
    if (isset($_SESSION['cliente_creado'])) {
        unset($_SESSION['cliente_creado']);
    }

    //ALERTA CLIENTE CREADO ERROR
    if (isset($_SESSION['cliente_creado_error'])) {
        unset($_SESSION['cliente_creado_error']);
    }

     //ALERTA CLIENTE MODIFICADO
     if (isset($_SESSION['cliente_modificado'])) {
        unset($_SESSION['cliente_modificado']);
    }

    //ALERTA CLIENTE MODIFICADO ERROR
    if (isset($_SESSION['cliente_modificado_error'])) {
        unset($_SESSION['cliente_modificado_error']);
    }

     //ALERTA CLIENTE ELIMINADO
     if (isset($_SESSION['cliente_eliminado'])) {
        unset($_SESSION['cliente_eliminado']);
    }

    //ALERTA CLIENTE ELIMINADO ERROR
    if (isset($_SESSION['cliente_eliminado_error'])) {
        unset($_SESSION['cliente_eliminado_error']);
    }
}

/** FUNCION PARA CREAR Y MOSTRAR ALERTAS */

function mostrar_alertas()
{
    /******************************************************* CLIENTES *******************************************************/

    //ALERTA CLIENTE CREADO
    if (isset($_SESSION['cliente_creado'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado el cliente</div>";
        unset($_SESSION['cliente_creado']);
    }

    //ALERTA CLIENTE CREADO ERROR
    if (isset($_SESSION['cliente_creado_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido crear el cliente</div>";
        unset($_SESSION['cliente_creado_error']);
    }

     //ALERTA CLIENTE MODIFICADO
     if (isset($_SESSION['cliente_modificado'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha modificado el cliente</div>";
        unset($_SESSION['cliente_modificado']);
    }

    //ALERTA CLIENTE MODIFICADO ERROR
    if (isset($_SESSION['cliente_modificado_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido modificar el cliente</div>";
        unset($_SESSION['cliente_modificado_error']);
    }

    //ALERTA CLIENTE ELIMINADO
    if (isset($_SESSION['cliente_eliminado'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado el cliente</div>";
        unset($_SESSION['cliente_eliminado']);
    }

    //ALERTA CLIENTE ELIMINADO ERROR
    if (isset($_SESSION['cliente_eliminado_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido eliminar el cliente</div>";
        unset($_SESSION['cliente_eliminado_error']);
    }

    
    /********************************************************* TAREAS ********************************************************/

    //ALERTA TAREA TERMINADA
    if (isset($_SESSION['terminar_tarea'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha marcado la tarea como terminada</div>";
        unset($_SESSION['terminar_tarea']);
    }

    //ALERTA TAREA TERMINADA ERROR
    if (isset($_SESSION['terminar_tarea_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido marcar la tarea como terminada</div>";
        unset($_SESSION['terminar_tarea_error']);
    }

    //ALERTA TAREA CREADA
    if (isset($_SESSION['tarea_creada'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado una nueva tarea</div>";
        unset($_SESSION['tarea_creada']);
    }

    //ALERTA TAREA CREADA ERROR
    if (isset($_SESSION['tarea_creada_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido crear la tarea</div>";
        unset($_SESSION['tarea_creada_error']);
    }

    //ALERTA TAREA MODIFICADA
    if (isset($_SESSION['tarea_modificada'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha modificado la tarea</div>";
        unset($_SESSION['tarea_modificada']);
    }

    //ALERTA TAREA MODIFICADA ERROR
    if (isset($_SESSION['tarea_modificada_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido modificar la tarea</div>";
        unset($_SESSION['tarea_modificada_error']);
    }

    //ALERTA TAREA ELIMINADA
    if (isset($_SESSION['tarea_eliminada'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado la tarea seleccionada</div>";
        unset($_SESSION['tarea_eliminada']);
    }

    //ALERTA TAREA ELIMINADA ERROR
    if (isset($_SESSION['tarea_eliminada_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido eliminar la tarea</div>";
        unset($_SESSION['tarea_eliminada_error']);
    }

    //ALERTA TAREA ASIGNADA
    if (isset($_SESSION['tarea_asignada'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha asignado la tarea</div>";
        unset($_SESSION['tarea_asignada']);
    }

    //ALERTA TAREA ASIGNADA ERROR
    if (isset($_SESSION['tarea_asignada_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido asignar la tarea</div>";
        unset($_SESSION['tarea_asignada_error']);
    }

    //ALERTA TAREA ASIGNADA ELIMINADA
    if (isset($_SESSION['eliminar_tarea_asignada'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado la tarea</div>";
        unset($_SESSION['eliminar_tarea_asignada']);
    }

    //ALERTA TAREA ASIGNADA ELIMINADA ERROR
    if (isset($_SESSION['eliminar_tarea_asignada_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Correcto!!</strong> No se ha podido eliminar la tarea</div>";
        unset($_SESSION['eliminar_tarea_asignada_error']);
    }

    /****************************************************** USUARIOS ***************************************************************/

    //ALERTA CREAR USUARIO
    if (isset($_SESSION['crear_usuario'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha creado un nuevo usuario</div>";
        unset($_SESSION['crear_usuario']);
    }

    //ALERTA CREAR USUARIO ERROR
    if (isset($_SESSION['crear_usuario_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido crear el usuario</div>";
        unset($_SESSION['crear_usuario_error']);
    }

    //ALERTA USUARIO ELIMINADO
    if (isset($_SESSION['usuario_eliminado'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha eliminado el usuario</div>";
        unset($_SESSION['usuario_eliminado']);
    }

    //ALERTA USUARIO ELIMINADO ERROR
    if (isset($_SESSION['usuario_eliminado_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido eliminar el usuario</div>";
        unset($_SESSION['usuario_eliminado_error']);
    }
    //ALERTA USUARIO MODIFICADO
    if (isset($_SESSION['usuario_modificado'])) {
        echo "<div id='alert' class='alert alert-success mt-4'><strong>Correcto!!</strong> Se ha modificado el usuario</div>";
        unset($_SESSION['usuario_modificado']);
    }

    //ALERTA USUARIO MODIFICADO ERROR
    if (isset($_SESSION['usuario_modificado_error'])) {
        echo "<div id='alert' class='alert alert-danger mt-4'><strong>Ups!!</strong> No se ha podido modificar el usuario</div>";
        unset($_SESSION['usuario_modificado_error']);
    }
    
}

<nav class="navbar fixed-bottom footer__">
    <div class="container-fluid">
        <div class="col-md-12">
            <a class="navbar-brand d-block text-center text-dark footer--texto__" href="mailto:asiermgonzalez@outlook.es">Desarrollado por Asier Martín González</a>
        </div>
    </div>
</nav>



<!-- CERRAR LAS CONEXIONES -->
<?php $conexion->close(); ?>



<!-- EFECTOS JQUERY -->
<script>
    //Menú desplegable tareas.php
    $(document).ready(function() {

        /** MENUS DESPLEGABLES */

        //MENU CREAR TAREAS
        $("#boton-crear-tarea").click(function() {
            $('#menu_crear_tarea').slideDown(1000);
        });

        $('#cierre_crear_tarea').click(function() {
            $('#menu_crear_tarea').slideUp();
        });

        //MENU MODIFICAR TAREAS
        $('#cierre_modificar_tarea').click(function() {
            $('#menu_modificar_tarea').slideUp();
        });

        //MENU ASIGNAR TAREAS
        $('#cierre_asignar_tarea').click(function() {
            $('#menu_asignar_tarea').slideUp();
        });


        //MENU CREAR CLIENTE
        $("#boton-crear-cliente").click(function() {
            $('#menu_crear_cliente').slideDown(1000);
        });

        $('#cierre_crear_cliente').click(function() {
            $('#menu_crear_cliente').slideUp();
        });

        //MENU MODIFICAR CLIENTE
        $("#boton-modificar-cliente").click(function() {
            $('#menu_modificar_cliente').slideDown();
        });

        $('#cierre_modificar_cliente').click(function() {
            $('#menu_modificar_cliente').slideUp();
        });

        //MENU CREAR USUARIO
        $("#boton-crear-usuario").click(function() {
            $('#menu_crear_usuario').slideDown(1000);
        });

        $('#cierre_crear_usuario').click(function() {
            $('#menu_crear_usuario').slideUp();
        });

        //MENU MODIFICAR USUARIO
        $("#boton-modificar-usuario").click(function() {
            $('#menu_modificar_usuario').slideDown();
        });

        $('#cierre_modificar_usuario').click(function() {
            $('#menu_modificar_usuario').slideUp();
        });



        /** COMENZAR TAREA */

        //COMENZAR_TAREA - PONE EL FONDO VERDE AL PULSAR
        $("#cambiarVerde1").click(function() {
            $("#pendiente1").addClass("fondo_verde");
            $("#pendiente1").text("HECHO");
            $("#cambiarVerde1").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde2").click(function() {
            $("#pendiente2").addClass("fondo_verde");
            $("#pendiente2").text("HECHO");
            $("#cambiarVerde2").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde3").click(function() {
            $("#pendiente3").addClass("fondo_verde");
            $("#pendiente3").text("HECHO");
            $("#cambiarVerde3").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde4").click(function() {
            $("#pendiente4").addClass("fondo_verde");
            $("#pendiente4").text("HECHO");
            $("#cambiarVerde4").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde5").click(function() {
            $("#pendiente5").addClass("fondo_verde");
            $("#pendiente5").text("HECHO");
            $("#cambiarVerde5").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde6").click(function() {
            $("#pendiente6").addClass("fondo_verde");
            $("#pendiente6").text("HECHO");
            $("#cambiarVerde6").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde7").click(function() {
            $("#pendiente7").addClass("fondo_verde");
            $("#pendiente7").text("HECHO");
            $("#cambiarVerde7").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde8").click(function() {
            $("#pendiente8").addClass("fondo_verde");
            $("#pendiente8").text("HECHO");
            $("#cambiarVerde8").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde9").click(function() {
            $("#pendiente9").addClass("fondo_verde");
            $("#pendiente9").text("HECHO");
            $("#cambiarVerde9").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde10").click(function() {
            $("#pendiente10").addClass("fondo_verde");
            $("#pendiente10").text("HECHO");
            $("#cambiarVerde10").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde11").click(function() {
            $("#pendiente11").addClass("fondo_verde");
            $("#pendiente11").text("HECHO");
            $("#cambiarVerde11").text("V").addClass("fondo_verde");
        });

        $("#cambiarVerde12").click(function() {
            $("#pendiente12").addClass("fondo_verde");
            $("#pendiente12").text("HECHO");
            $("#cambiarVerde12").text("V").addClass("fondo_verde");
        });

    });
</script>



</body>

</html>
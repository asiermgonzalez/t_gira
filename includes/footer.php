<nav class="navbar fixed-bottom footer__">
    <div class="container-fluid">
        <div class="col-md-12">
            <a class="navbar-brand d-block text-center footer--texto__ text-light" href="mailto:asiermgonzalez@outlook.es">Desarrollado por Asier Martín González</a>
        </div>
    </div>
</nav>



<!-- CERRAR LAS CONEXIONES --> 
<?php $conexion->close(); ?>


<!-- EFECTOS JQUERY -->

<script>
    //Menú desplegable tareas.php
    $(document).ready(function() {

        //MENU CREAR TAREAS
        $("#boton-desplegar").click(function() {
            $('#menu_desplegable_tareas__').slideDown();
        });

        $("#clic_cierre_tareas__").click(function() {
            $('#menu_desplegable_tareas__').slideUp();
        });

        //MENU MODIFICAR
        $("#clic_cierre_modificar__").click(function(){
            $('#menu_desplegable_modificar__').slideUp();
        });

        //MENU ASIGNAR
        $("#clic_cierre_asignar__").click(function(){
            $('#menu_desplegable_asignar__').slideUp();
        });

    });
</script>



</body>

</html>
<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}
 
?>

<style>
    #menu_principal__ {
        margin-top: 80px;
    }
</style>

<div class="container-fluid cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>"  alt="logo">
    <h1 class="text-center text-light pb-4">Menú Administrador</h1>
</div>

<div class="container" id="menu_principal__">

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                <a href="tareas.php" class="btn btn-info btn-lg btn-block mt-4 text-light" role="button">TAREAS</a>
                <a href="usuarios.php" class="btn btn-block btn-lg btn-info text-light mt-4" role="button">USUARIOS</a>
                <a href="clientes.php" class="btn btn-block btn-lg btn-info text-light mt-4" role="button">CLIENTES</a>
            </div>
            <div class="col-md-6 col-xm-12">
                <a href="configuracion.php" class="btn btn-lg btn-info text-light btn-block mt-4" role="button">CONFIGURACION</a>
                <a href="bbdd/cerrar_sesion.php" class="btn btn-lg btn-block btn-danger mt-4" role="button">CERRAR SESION</a>
            </div>
            <div class="col-md-4 col-xm-12">

            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
<?php

include 'includes/head.php';

if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

?>

<style>
    #menu_principal__ {
        margin-top: 80px;
    }
</style>

<div class="container-fluid cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="logo">
    <h1 class="text-center display-4 text-light pb-4 titulo__">Menú Usuario</h1>
</div>

<div class="container-fluid mt-2">

    <div class="row">
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-block" role="button">Listado Clientes</a>
            <a href="#" class="btn btn-warning btn-block" role="button">Listado Usuarios</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">Cerrar Sesión</a>
        </div>
        <div class="col-md-10">
            <table class="table table-striped">
                <?php
                $sql = "SELECT * FROM tareas";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['tarea']; ?></td>
                        <td><?= $registro['cliente']; ?></td>
                        <td><?= $registro['fecha']; ?></td>
                        <td><?= $registro['estado']; ?></td>
                        <td><a href="instalar_tienda.php?id=<?= $registro['id'] ?>" class="btn btn-success" role="button">Comenzar</a></td>
                        <td><a href="instalar_tienda.php?id=<?= $registro['id'] ?>" class="btn btn-danger" role="button">Finalizar</a></td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>


</div>

<?php include 'includes/footer.php'; ?>
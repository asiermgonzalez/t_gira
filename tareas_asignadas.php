<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>

<style>

</style>

<div class="container-fluid bg-secondary cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="">
    <h1 class="text-center display-4 text-light pb-4 titulo__">Tareas Asignadas</h1>
</div>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-2">
            <a href="menu_administrador.php" class="btn btn-primary btn-block" role="button">Menú</a>
        </div>
        <div class="col-md-10">
            <table class="table table-striped">
                <?php
                $sql = "SELECT * FROM tareas";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['usuario']; ?></td>
                        <td><?= $registro['tarea']; ?></td>
                        <td><?= $registro['cliente']; ?></td>
                        <td><?= $registro['fecha']; ?></td>
                        <td><?= $registro['estado']; ?></td>
                        <td><a href="<?= $_SERVER['PHP_SELF'] . '?id=' . $registro['id'] ?>;" class="btn btn-danger btn-block btn_responsive" role="button">Eliminarar</a></td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';
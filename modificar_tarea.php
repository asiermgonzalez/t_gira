<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>

<div class="container-fluid bg-secondary cabecera__">
    <img src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" width="150px;" alt="">
    <h1 class="text-center display-4 text-light pb-4">Modificar Tarea</h1>
</div>

    <div class="container mt-4">

        <table class="table table-striped">
            <?php
            $sql = "SELECT * FROM tarea";
            $respuesta = mysqli_query($conexion, $sql);
            while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                <tr>
                    <td><?= $registro['id']; ?></td>
                    <td><?= $registro['nombre']; ?></td>
                    <td><a href="tarea_para_modificar.php?id=<?= $registro['id'] ?>" class="btn btn-warning btn-block" role="button">Modificar</a></td>
                </tr>

            <?php
            endwhile;
            $conexion->close();
            ?>
        </table>

        <br>

        <a href="menu_administrador.php" class="btn btn-primary" role="button">Menú</a>

    </div>

<?php include 'includes/footer.php'; ?>
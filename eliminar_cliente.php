<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>

    <div class="jumbotron jumbotron-fluid">
        <h1 class="text-center display-4">Eliminar Cliente</h1>
    </div>

    <div class="container">

        <table class="table table-striped">
            <?php
            $sql = "SELECT * FROM clientes ORDER BY nombre ASC";
            $respuesta = mysqli_query($conexion, $sql);
            while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                <tr>
                    <td><?= $registro['id']; ?></td>
                    <td><?= $registro['nombre']; ?></td>
                    <td><?= $registro['telefono']; ?></td>
                    <td><?= $registro['email']; ?></td>
                    <td><a href="bbdd/eliminar_cliente.php?id=<?= $registro['id'] ?>" class="btn btn-danger" role="button">Eliminar</a></td>
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
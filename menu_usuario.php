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
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_cabecera']; ?>" alt="logo">
    <h1 class="text-center display-4 pb-4">Menú Usuario</h1>
</div>

<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-md-3">
            <a href="listado_clientes.php" class="btn btn-info btn-block" role="button">LISTADO CLIENTES</a>
            <a href="listado_usuarios.php" class="btn btn-info btn-block" role="button">LISTADO USUARIOS</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
        </div>
        <div class="col-md-9">
            <table class="table table-hover table-sm table-responsive-sm">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>TAREA</th>
                    <th>CLIENTE</th>
                    <th>FECHA</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </tr>
                <?php
                $nombre = $_SESSION['usuario'];
                $sql = "SELECT * FROM tareas WHERE usuario='$nombre' AND estado='PENDIENTE'";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['tarea']; ?></td>
                        <td><?= $registro['cliente']; ?></td>
                        <td><?= $registro['fecha']; ?></td>
                        <td><?= $registro['estado']; ?></td>
                        <td><a href="comenzar_tarea.php?id=<?= $registro['id']; ?>" class="btn btn-info" role="button">COMENZAR</a>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>

<!-- ALERTAS -->
<div class="container mt-4">
    <?php
    include 'includes/alertas.php';
    mostrar_alertas();
    ?>
</div>

<?php include 'includes/footer.php'; ?>
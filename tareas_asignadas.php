<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>

<style>

</style>

<div class="container-fluid cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_cabecera']; ?>" alt="">
    <h1 class="text-center display-4 pb-4 titulo__">Tareas Asignadas</h1>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-2">
            <a href="tareas.php" class="btn btn-info btn-block mt-4 mb-4" role="button">VOLVER</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block mt-4 mb-4" role="button">CERRAR SESION</a>
        </div>
        <div class="col-md-10">
            <table class="table table-hover mt-4 table-sm table-responsive-sm">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>TAREA</th>
                    <th>CLIENTE</th>
                    <th>FECHA</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </tr>
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
                        <?php if ($registro['estado'] == 'PENDIENTE') { ?>
                            <td class="bg-primary text-light text-center"><?= $registro['estado']; ?></td>
                        <?php } else { ?>
                            <td class="bg-success text-light text-center"><?= $registro['estado']; ?></td>
                        <?php }; ?>
                        <td><a href="bbdd/opciones_tareas.php?eliminar_tarea_asignada=<?= $registro['id'];?>" class="btn btn-danger btn-block btn_responsive" role="button">ELIMINAR</a></td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>


<!-- ALERTAS -->
<div class="container mb-4">
    <?php
    include 'includes/alertas.php';
    mostrar_alertas();
    ?>
</div>

<?php include 'includes/footer.php';

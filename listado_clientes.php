<?php

include 'includes/head.php';

if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

?>

<style>

</style>

<div class="container-fluid bg-secondary cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="">
    <h1 class="text-center text-light pb-4 titulo__">Clientes</h1>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3">
            <a href="menu_usuario.php" class="btn btn-info btn-block" role="button">VOLVER</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
        </div>
        <div class="col-md-9">
            <table class="table table-hover table-sm table-responsive-sm">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PERSONA CONTACTO</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>DIRECCION</th>
                    <th>CP</th>
                    <th>POBLACION</th>
                    <th>PROVINCIA</th>
                </tr>
                <?php
                $sql = "SELECT * FROM clientes";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['nombre']; ?></td>
                        <td><?= $registro['persona_contacto']; ?></td>
                        <td><?= $registro['telefono']; ?></td>
                        <td><?= $registro['email']; ?></td>
                        <td><?= $registro['direccion']; ?></td>
                        <td><?= $registro['cp']; ?></td>
                        <td><?= $registro['poblacion']; ?></td>
                        <td><?= $registro['provincia']; ?></td>
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

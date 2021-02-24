<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location:../index.php');
}

require_once '../bbdd/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas - <?= $_SESSION['usuario']; ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron jumbotron-fluid">
        <h1 class="text-center display-4">Tienda Virtual</h1>
    </div>

    <div class="container">

        <table class="table table-striped">
            <?php
            $sql = "SELECT * FROM instalar_tienda WHERE id=''";
            $respuesta = mysqli_query($conexion, $sql);
            while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                <tr>
                    <td><?= $registro['tarea']; ?></td>
                    <td><?= $registro['empresa']; ?></td>
                    <td><a href="pasos_instalar_tienda.php" class="btn btn-success" role="button">Ver Tarea</a></td>
                </tr>

            <?php
            endwhile;
            ?>
        </table>

        <br>

        <a href="../bbdd/cerrar_sesion.php" class="btn btn-primary" role="button">Cerrar Sesión</a>

    </div>

<?php $conexion->close(); ?>

</body>

</html>
<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

$id = $_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM tarea WHERE id='$id'");

$tarea = mysqli_fetch_assoc($consulta);

?>

<div class="container-fluid bg-secondary cabecera__">
    <img src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" width="150px;" alt="">
    <h1 class="text-center display-4 text-light pb-4">Modificación Tarea</h1>
</div>


<div class="container">
    <div class="col-md-10">

        <form action="bbdd/opciones.php?id='<?=$tarea['id']?>'" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group mt-4">
                        <label>ID:</label>
                        <input type="number" class="form-control" name="id" value="<?= $tarea['id']; ?>" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mt-4">
                        <label>Nombre tarea:</label>
                        <input type="text" class="form-control" placeholder="Nombre de la tarea" name="nombre" value="<?= $tarea['nombre']; ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Función 1:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f1']; ?>" name="f1">
            </div>
            <div class="form-group">
                <label>Función 2:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f2']; ?>" name="f2">
            </div>
            <div class="form-group">
                <label>Función 3:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f3']; ?>" name="f3">
            </div>
            <div class="form-group">
                <label>Función 4:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f4']; ?>" name="f4">
            </div>
            <div class="form-group">
                <label>Función 5:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f5']; ?>" name="f5">
            </div>
            <div class="form-group">
                <label>Función 6:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f6']; ?>" name="f6">
            </div>
            <div class="form-group">
                <label>Función 7:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f7']; ?>" name="f7">
            </div>
            <div class="form-group">
                <label>Función 8:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f8']; ?>" name="f8">
            </div>
            <div class="form-group">
                <label>Función 9:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f9']; ?>" name="f9">
            </div>
            <div class="form-group">
                <label>Función 10:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f10']; ?>" name="f10">
            </div>
            <div class="form-group">
                <label>Función 11:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f11']; ?>" name="f11">
            </div>
            <div class="form-group">
                <label>Función 12:</label>
                <input type="text" class="form-control" maxlength="200" value="<?= $tarea['f12']; ?>" name="f12">
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block" name="modificar_tarea">Modificar</button>
                </div>
                <div class="col-md-6">
                    <a href="tareas.php" class="btn btn-block btn-danger" role="button">Menú</a>
                </div>
            </div>

        </form>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
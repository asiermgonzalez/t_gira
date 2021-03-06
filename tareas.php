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
    <h1 class="text-center display-4 pb-4 titulo__">Tareas</h1>
</div>

<div class="container-fluid mt-4">

    <div class="row">
    <div class="col-md-3 p-4">
            <button type="button" class="btn btn-info btn-block" id="boton-crear-tarea">CREAR TAREA</button>
            <a href="tareas_asignadas.php" class="btn btn-info btn-block" role="button">TAREAS ASIGNADAS</a>
            <a href="menu_administrador.php" class="btn btn-info btn-block" role="button">MENU</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
            <!-- ALERTAS -->

    <?php
        include 'includes/alertas.php';
        mostrar_alertas();
    ?>
    
    <script>desactivarAlert();</script>

        </div>
        <div class="col-md-9 mt-4">
            <table class="table table-hover table-sm table-responsive-sm" style="margin-bottom: 120px;">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>TAREA</th>
                    <th>OPCIONES</th>
                </tr>
                <?php
                $sql = "SELECT * FROM tarea";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['nombre']; ?></td>
                        <td>
                            <a href="<?= $_SERVER['PHP_SELF'] . '?id_asignar=' . $registro['id'] ?>" class="btn btn-info" role="button">ASIGNAR</a>
                            <a href="<?= $_SERVER['PHP_SELF'] . '?id=' . $registro['id'] ?>;" class="btn btn-info" role="button">MODIFICAR</a>
                            <a href="bbdd/opciones_tareas.php?id=<?= $registro['id'] ?>&eliminar_tarea" class="btn btn-info" role="button">ELIMINAR</a>
                        </td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>

</div>


<!-- MENU DESPLEGABLE CREAR TAREA -->
<div class="container-fluid p-4" id="menu_crear_tarea">
    <h6 class="text-right" id="cierre_crear_tarea">(x)</h6>
    <h2 class="text-center">Nueva Tarea</h2>
    <form action="bbdd/opciones_tareas.php" method="POST">
        <div class="form-group mt-4">
            <label>Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre tarea" name="nombre" required autofocus>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 1" name="f1">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 2" name="f2">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 3" name="f3">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 4" name="f4">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 5" name="f5">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 6" name="f6">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 7" name="f7">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 8" name="f8">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 9" name="f9">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 10" name="f10">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 11" name="f11">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Función 12" name="f12">
            </div>
        </div>

        <button type="submit" class="btn btn-info btn-estandar mt-2" name="crear_tarea">CREAR</button>

    </form>

</div>


<?php if (isset($_GET['id'])) {

    $id = $_GET["id"];

    //CONSULTA PARA MOSTRAR LA TAREA DEL ID RECIBIDO
    $peticion = mysqli_query($conexion, "SELECT * FROM tarea WHERE id=$id");
    $modificar = mysqli_fetch_assoc($peticion);

?>


    <!-- MENU DESPLEGABLE MODIFICAR TAREA -->

    <div class="container-fluid p-4" id="menu_modificar_tarea">
            <h6 class="text-right" id="cierre_modificar_tarea">(x)</h6>
            <h2 class="text-center">Modificar Tarea</h2>

            <form action="bbdd/opciones_tareas.php?id=<?= $modificar['id'] ?>" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>ID:</label>
                            <input type="number" class="form-control" name="id" value="<?= $modificar['id']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>Nombre tarea:</label>
                            <input type="text" class="form-control" placeholder="Nombre de la tarea" name="nombre" value="<?= $modificar['nombre']; ?>" required autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Función 1:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f1']; ?>" name="f1">
                </div>
                <div class="form-group">
                    <label>Función 2:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f2']; ?>" name="f2">
                </div>
                <div class="form-group">
                    <label>Función 3:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f3']; ?>" name="f3">
                </div>
                <div class="form-group">
                    <label>Función 4:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f4']; ?>" name="f4">
                </div>
                <div class="form-group">
                    <label>Función 5:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f5']; ?>" name="f5">
                </div>
                <div class="form-group">
                    <label>Función 6:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f6']; ?>" name="f6">
                </div>
                <div class="form-group">
                    <label>Función 7:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f7']; ?>" name="f7">
                </div>
                <div class="form-group">
                    <label>Función 8:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f8']; ?>" name="f8">
                </div>
                <div class="form-group">
                    <label>Función 9:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f9']; ?>" name="f9">
                </div>
                <div class="form-group">
                    <label>Función 10:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f10']; ?>" name="f10">
                </div>
                <div class="form-group">
                    <label>Función 11:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f11']; ?>" name="f11">
                </div>
                <div class="form-group">
                    <label>Función 12:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['f12']; ?>" name="f12">
                </div>

                <div class="row" style="margin-bottom: 100px;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block" name="modificar_tarea">MODIFICAR</button>
                    </div>
                </div>

            </form>
    </div>

<?php }; ?>



<?php if (isset($_GET['id_asignar'])) {

    $id = $_GET["id_asignar"];

    //CONSULTA PARA MOSTRAR LA TAREA DEL ID RECIBIDO
    $peticion = mysqli_query($conexion, "SELECT * FROM tarea WHERE id=$id");
    $asignar = mysqli_fetch_assoc($peticion);

?>

    <!-- MENU DESPLEGABLE ADJUDICAR TAREA -->

    <div class="container-fluid p-4" id="menu_asignar_tarea">
        <div class="col-md-12">
            <h6 class="text-right" id="cierre_asignar_tarea">(x)</h6>
            <h2 class="text-center">Asignar Tarea</h2>

            <form action="bbdd/opciones_tareas.php?nombre=<?= $asignar['nombre'] ?>" method="POST">
                <div class="row">
                    <div class="col-md-4 col-xm-12">
                        <div class="form-group">
                            <label>Nombre tarea:</label>
                            <input type="text" class="form-control" placeholder="Nombre de la tarea" name="nombre" value="<?= $asignar['nombre']; ?>" disabled autofocus>
                        </div>
                    </div>
                    <div class="col-md-4 col-xm-12">
                        <div class="form-group">
                            <label>Cliente:</label>
                            <select name="cliente" class="form-control">
                                <?php $sel = mysqli_query($conexion, "SELECT * FROM clientes");
                                while ($cliente = mysqli_fetch_assoc($sel)) :
                                ?>
                                    <option value="<?= $cliente['nombre']; ?>"><?= $cliente['nombre']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-xm-12">
                        <label>Asignar a:</label>
                        <select class="form-control" name="usuario">
                            <?php $select = mysqli_query($conexion, "SELECT * FROM usuarios");
                            while ($usuario = mysqli_fetch_assoc($select)) :
                            ?>
                                <option value="<?= $usuario['nombre']; ?>"><?= $usuario['nombre']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-4 mt-2">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info" name="asignar_tarea">ASIGNAR</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

<?php }; ?>


<?php include 'includes/footer.php'; ?>
<?php

include 'includes/head.php';

//CONTROLAR QUE SOLO ACCEDAN ADMINISTRADOR Y USUARIOS
if (!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

$respuesta = mysqli_query($conexion, "SELECT * FROM configuracion WHERE id=1");
$registro = mysqli_fetch_assoc($respuesta);

?>

<style>

</style>

<div class="container-fluid cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_cabecera']; ?>" alt="">
    <h1 class="text-center text-light pb-4 titulo__">Configuración</h1>
</div>


<div class="container-fluid p-4">
    <div class="row">

        <div class="col-md-3">
            <a href="menu_administrador.php" class="btn btn-info btn-block" role="button">MENU</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
            
            <!-- ALERTAS -->
            <?php
                include 'includes/alertas.php';
                mostrar_alertas();
            ?>

<script>desactivarAlert();</script>

        </div>

        <div class="col-md-9">
            <form action="bbdd/opciones_configuracion.php?id=<?=$registro['id'];?>" method="POST">

                <h3>Cabecera</h3>
                <div class="row">
                    <div class="col-3">
                        <label class="form-label">Color cabecera</label>
                        <input type="text" class="form-control" value="<?=$registro['color_cabecera'];?>" name="color_cabecera">
                    </div>
                    <div class="col-3">
                        <label class="form-label">Color texto cabecera</label>
                        <input type="text" class="form-control" value="<?=$registro['color_texto_cabecera'];?>" name="color_texto_cabecera">
                    </div>
                    <div class="col-3">
                        <label class="form-label">Color borde cabecera</label>
                        <input type="text" class="form-control" value="<?=$registro['color_borde_cabecera'];?>" name="color_borde_cabecera">
                    </div>
                    <div class="col-3">
                        <label class="form-label">Logotipo cabecera</label>
                        <input type="text" class="form-control" value="<?=$registro['logotipo_cabecera'];?>" name="logotipo_cabecera">
                    </div>
                </div>

                <h3 class="mt-4">Cuerpo</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color cuerpo</label>
                        <input type="text" class="form-control" value="<?=$registro['color_cuerpo'];?>" name="color_cuerpo">
                    </div>
                </div>

                <h3 class="mt-4">Pie</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color pie</label>
                        <input type="text" class="form-control" value="<?=$registro['color_pie'];?>" name="color_pie">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Color texto pie</label>
                        <input type="text" class="form-control" value="<?=$registro['color_texto_pie'];?>" name="color_texto_pie">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Color borde pie</label>
                        <input type="text" class="form-control" value="<?=$registro['color_borde_pie'];?>" name="color_borde_pie">
                    </div>
                </div>

                <h3 class="mt-4">Tablas</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color fondo tabla</label>
                        <input type="text" class="form-control" value="<?=$registro['color_fondo_tabla'];?>" name="color_fondo_tabla">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <button type="submit" class="btn btn-info btn-block" name="modificar_configuracion">GUARDAR</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
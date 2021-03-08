<?php

include 'includes/head.php';

//CONTROLAR QUE SOLO ACCEDAN ADMINISTRADOR Y USUARIOS
if (!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

?>

<style>

</style>

<div class="container-fluid bg-secondary cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="">
    <h1 class="text-center text-light pb-4 titulo__">Configuración</h1>
</div>


<div class="container-fluid p-4">
    <div class="row">

        <div class="col-md-3">
            <a href="menu_administrador.php" class="btn btn-info btn-block" role="button">MENU</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
        </div>

        <div class="col-md-9">
            <form action="" method="POST">

                <h3>Cabecera</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color cabecera</label>
                        <input type="color" class="form-control form-control-color" value="#6c757d" name="color_cabecera">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Color texto cabecera</label>
                        <input type="color" class="form-control form-control-color" value="#ffffff" name="color_texto_cabecera">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Logotipo cabecera</label>
                        <input type="file" class="form-control" name="logotipo_cabecera">
                    </div>
                </div>

                <h3 class="mt-4">Cuerpo</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color cuerpo</label>
                        <input type="color" class="form-control form-control-color" value="#ffffff" name="color_cuerpo">
                    </div>
                </div>

                <h3 class="mt-4">Pie</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color pie</label>
                        <input type="color" class="form-control form-control-color" value="#6c757d" name="color_pie">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Color texto pie</label>
                        <input type="color" class="form-control form-control-color" value="#ffffff" name="color_texto_pie">
                    </div>
                </div>

                <h3 class="mt-4">Tablas</h3>
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Color fondo tabla</label>
                        <select name="color_fondo_tabla" class="form-control">
                            <option value="success">Verde</option>
                            <option value="primary">Azul</option>
                            <option value="secondary">Gris</option>

                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <button type="submit" class="btn btn-info btn-block" name="modificar_usuario">Guardar</button>
                    </div>
                </div>

            </form>
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
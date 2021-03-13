<?php

include 'includes/head.php';

if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
}

//OBTENER DATOS TAREA
$id = $_GET['id'];
$consulta_comenzar_tarea = mysqli_query($conexion, "SELECT * FROM tareas WHERE id='$id'");
$registro_comenzar_tarea = mysqli_fetch_assoc($consulta_comenzar_tarea);

//OBTENER DATOS CLIENTE VINCULADO A LA TAREA
$cliente=$registro_comenzar_tarea['cliente'];
$consulta_cliente=mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre='$cliente'");
$datos_cliente=mysqli_fetch_assoc($consulta_cliente);
?>

<style>
    #menu_principal__ {
        margin-top: 80px;
    }
</style>

<div class="container-fluid cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_cabecera']; ?>" alt="logo">
    <h1 class="text-center display-4 pb-4"><?= $registro_comenzar_tarea['tarea']; ?></h1>
</div>

<?php
//OBTENER PASOS DE LA TAREA
$tarea = $registro_comenzar_tarea['tarea'];
$lista_tarea = mysqli_query($conexion, "SELECT * FROM tarea WHERE nombre='$tarea'");
$listar = mysqli_fetch_assoc($lista_tarea)
?>


<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-md-3 p-4">
            <h2 class="text-center">Cliente</h2>
            <hr>
            <h5><?=$datos_cliente['nombre'];?></h5>
            <h5><?=$datos_cliente['persona_contacto'].' - '.$datos_cliente['telefono'];?></h5>
            <h5><?=$datos_cliente['email'];?></h5>
            <h5><?=$datos_cliente['direccion'];?></h5>
            <h5><?=$datos_cliente['cp'].' - '.$datos_cliente['poblacion'];?></h5>
            <h5><?=$datos_cliente['provincia'];?></h5>
            <hr>
            <a href="menu_usuario.php" class="btn btn-info btn-block mt-4 mb-4" role="button">VOLVER</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block mt-2 mb-4" role="button">CERRAR SESION</a>
        </div>
        <div class="col-md-9 p-4">
        <h2 class="text-center">Tarea</h2>
            <form action="bbdd/opciones_tareas.php?id_tarea_finalizada=<?= $registro_comenzar_tarea['id']; ?>" method="POST">

                <table class="table table-hover table-sm table-responsive-sm">
                    <tr class="bg-dark text-light">
                        <th></th>
                        <th class="text-center">PROCESO</th>
                        <th class="text-center">ESTADO</th>
                    </tr>

                    <!--EFECTOS JQUERY EN footer.php-->

                    <?php if (!empty($listar['f1'])) : ?>
                        <tr>
                            <td id="cambiarVerde1" class="bg-danger text-center">X</td>
                            <td><?= $listar['f1']; ?></td>
                            <td class="bg-danger text-center" id="pendiente1">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f2'])) : ?>
                        <tr>
                            <td id="cambiarVerde2" class="bg-danger text-center">X</td>
                            <td><?= $listar['f2']; ?></td>
                            <td class="bg-danger text-center" id="pendiente2">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f3'])) : ?>
                        <tr>
                            <td id="cambiarVerde3" class="bg-danger text-center">X</td>
                            <td><?= $listar['f3']; ?></td>
                            <td class="bg-danger text-center" id="pendiente3">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f4'])) : ?>
                        <tr>
                            <td id="cambiarVerde4" class="bg-danger text-center">X</td>
                            <td><?= $listar['f4']; ?></td>
                            <td class="bg-danger text-center" id="pendiente4">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f5'])) : ?>
                        <tr>
                            <td id="cambiarVerde5" class="bg-danger text-center">X</td>
                            <td><?= $listar['f5']; ?></td>
                            <td class="bg-danger text-center" id="pendiente5">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f6'])) : ?>
                        <tr>
                            <td id="cambiarVerde6" class="bg-danger text-center">X</td>
                            <td><?= $listar['f6']; ?></td>
                            <td class="bg-danger text-center" id="pendiente6">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f7'])) : ?>
                        <tr>
                            <td id="cambiarVerde7" class="bg-danger text-center">X</td>
                            <td><?= $listar['f7']; ?></td>
                            <td class="bg-danger text-center" id="pendiente7">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f8'])) : ?>
                        <tr>
                            <td id="cambiarVerde8" class="bg-danger text-center">X</td>
                            <td><?= $listar['f8']; ?></td>
                            <td class="bg-danger text-center" id="pendiente8">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f9'])) : ?>
                        <tr>
                            <td id="cambiarVerde9" class="bg-danger text-center">X</td>
                            <td><?= $listar['f9']; ?></td>
                            <td class="bg-danger text-center" id="pendiente9">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f10'])) : ?>
                        <tr>
                            <td id="cambiarVerde10" class="bg-danger text-center">X</td>
                            <td><?= $listar['f10']; ?></td>
                            <td class="bg-danger text-center" id="pendiente10">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f11'])) : ?>
                        <tr>
                            <td id="cambiarVerde11" class="bg-danger text-center">X</td>
                            <td><?= $listar['f11']; ?></td>
                            <td class="bg-danger text-center" id="pendiente11">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($listar['f12'])) : ?>
                        <tr>
                            <td id="cambiarVerde12" class="bg-danger text-center">X</td>
                            <td><?= $listar['f12']; ?></td>
                            <td class="bg-danger text-center" id="pendiente12">PENDIENTE</td>
                        </tr>
                    <?php endif; ?>

                </table>

                <button type="submit" class="btn btn-info btn-estandar mt-2">TERMINAR TAREA</button> <br>
               
            </form>
        </div>

    </div>

</div>



<?php include 'includes/footer.php'; ?>
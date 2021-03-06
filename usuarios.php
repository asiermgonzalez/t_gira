<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
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
    <h1 class="text-center display-4 pb-4">Usuarios</h1>
</div>


<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-md-3 p-4">
            <button type="button" class="btn btn-info btn-block" id="boton-crear-usuario">CREAR USUARIO</button>
            <a href="menu_administrador.php" class="btn btn-info btn-block" role="button">MENU</a>
            <a href="bbdd/cerrar_sesion.php" class="btn btn-danger btn-block" role="button">CERRAR SESION</a>
      
            <!-- ALERTAS -->
        <?php
            include 'includes/alertas.php'; 
            mostrar_alertas();
        ?>

    <script>desactivarAlert();</script>

        </div>
        <div class="col-md-9 p-4">
            <table class="table table-hover table-sm table-responsive-sm">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>ACCIONES</th>
                </tr>
                <?php
                $sql = "SELECT * FROM usuarios";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['nombre']; ?></td>
                        <td><?= $registro['apellido']; ?></td>
                        <td><?= $registro['telefono']; ?></td>
                        <td><?= $registro['email']; ?></td>
                        <td>
                            <a href="<?= $_SERVER['PHP_SELF'] . '?id=' . $registro['id'] ?>;" class="btn btn-info" role="button" id="boton-modificar-usuario">MODIFICAR</a>
                            <a href="bbdd/opciones_usuarios.php?id=<?= $registro['id'] ?>&eliminar_usuario" class="btn btn-info" role="button">ELIMINAR</a>
                        </td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>

</div>


<!-- MENU DESPLEGABLE CREAR USUARIO -->
<div class="container-fluid p-4" id="menu_crear_usuario">
    <h6 class="text-right" id="cierre_crear_usuario">(x)</h6>

    <form action="bbdd/opciones_usuarios.php" method="POST">
        <h2 class="text-center">Nuevo Usuario</h2>
        <div class="row">
            <div class="col">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group mt-4">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group mt-4">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group mt-4">
                    <select name="rol" class="form-control">
                        <option value="USUARIO">Usuario</option>
                        <option value="ADMINISTRADOR">Administrador</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info btn-estandar mt-2" name="crear_usuario">CREAR</button>

    </form>

</div>


<?php if (isset($_GET['id'])) {

    $id = $_GET["id"];
    
    $peticion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=$id");
    $modificar = mysqli_fetch_assoc($peticion);

    //MOSTRAR LA CONTRASEÑA SIN ENCRIPTAR
    $password = password_verify($password, $modificar['password']);

?>


    <!-- MENU DESPLEGABLE MODIFICAR USUARIO -->

    <div class="container-fluid p-4" id="menu_modificar_usuario">
        <div class="col-md-12">
            <h6 class="text-right" id="cierre_modificar_usuario">(x)</h6>

            <form action="bbdd/opciones_usuarios.php?id=<?= $modificar['id'] ?>" method="POST">
                <h2 class="text-center">Modificar Usuario</h2>
                <div class="row">
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>ID:</label>
                            <input type="number" class="form-control" name="id" value="<?= $modificar['id']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" name="nombre" value="<?= $modificar['nombre']; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Apellido:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['apellido']; ?>" name="apellido">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" maxlength="200" value="<?= $modificar['email']; ?>" name="email">
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" maxlength="200" value="<?= $password; ?>" name="password">
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['telefono']; ?>" name="telefono">
                </div>
                <div class="form-group mt-4">
                    <select name="rol" class="form-control">
                        <option value="USUARIO">Usuario</option>
                        <option value="ADMINISTRADOR">Administrador</option>
                    </select>
                </div>


                <div class="row mb-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block" name="modificar_usuario">MODIFICAR</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

<?php }; ?>


<?php include 'includes/footer.php'; ?>
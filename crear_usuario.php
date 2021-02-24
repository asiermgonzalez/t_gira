<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>

<div class="container-fluid bg-secondary cabecera__">
    <img src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" width="150px;" alt="">
    <h1 class="text-center display-4 text-light pb-4">Crear Usuario</h1>
</div>

    <div class="container">
        <div class="col-md-6 ml-auto mr-auto">
            <form action="bbdd/opciones.php" method="POST">
                <div class="form-group mt-4">
                    <label>Email:</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
                <div class="form-group mt-4">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="form-group mt-4">
                    <label>Apellido:</label>
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label>Rol:</label>
                    <select name="rol" class="form-control">
                        <option value="admin" selected>Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success btn-block" name="crear_usuario">Crear</button>
                    </div>
                    <div class="col-md-6">
                        <a href="menu_administrador.php" class="btn btn-danger btn-block" role="button">Menú</a>
                    </div>
                </div>

            </form>
        </div>
    </div>




</body>

</html>
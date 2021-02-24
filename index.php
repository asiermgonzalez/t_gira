<?php include 'includes/head.php'; ?>

<div class="container-fluid bg-secondary cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="logo">
    <h1 class="text-center display-4 text-light pb-4">Login</h1>
</div>

<div class="container" id="formulario-login__">
    <div class="col-md-6 ml-auto mr-auto">
        <div class="row">
            <div class="col-md-2 ml-auto mr-auto">
                <img src="imagenes/candado.svg" alt="">
            </div>
        </div>

        <form action="bbdd/login.php" method="POST">
            <div class="form-group mt-4">
                <label>Usuario:</label>
                <input type="email" class="form-control" placeholder="Usuario" name="email">
            </div>
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

        <br>

        <?php if (isset($_SESSION['login_incorrecto'])) : ?>
            <div class="alert alert-danger">
                <strong>Ups!!</strong> <?= $_SESSION['login_incorrecto']; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
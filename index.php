<?php include 'includes/head.php'; ?>

<div class="container-fluid bg-secondary cabecera__">
    <img class="imagen-cabecera__" src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" alt="logo">
    <h1 class="text-center text-light pb-4">Proyecto Final</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto mr-auto" id="formulario-login__">

        <h2 class="text-center">Login</h2>

            <form action="bbdd/login.php" method="POST">
                <div class="form-group mt-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Usuario" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="password" required>
                </div>
                <button type="submit" class="btn btn-block btn-lg btn-info mt-4">ENTRAR</button>
            </form>

            <br>

            <?php if (isset($_SESSION['login_incorrecto'])) : ?>
                <div class="alert alert-danger">
                    <strong>Ups!!</strong> <?= $_SESSION['login_incorrecto']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
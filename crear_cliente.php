<?php

include 'includes/head.php';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
}

?>


<!-- CABECERA -->

<div class="container-fluid bg-secondary cabecera__">
    <img src="imagenes/<?= $registro['logotipo_jumbotron']; ?>" width="150px;" alt="">
    <h1 class="text-center display-4 text-light pb-4">Crear Cliente</h1>
</div>

<!-- FORMULARIO -->

<div class="container">
    <div class="col-md-6 ml-auto mr-auto">
        <form action="bbdd/crear_cliente.php" method="POST">
            <div class="form-group mt-4">
                <label>Denominación:</label>
                <input type="text" class="form-control" placeholder="Nombre comercial" name="nombre">
            </div>
            <div class="form-group">
                <label>Persona de contacto:</label>
                <input type="text" class="form-control" placeholder="Persona de contacto" name="persona">
            </div>
            <div class="form-group">
                <label>Teléfono:</label>
                <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label>Dirección:</label>
                <input type="text" class="form-control" placeholder="Calle y número" name="direccion">
            </div>
            <div class="form-group">
                <label>CP:</label>
                <input type="text" class="form-control" placeholder="CP" maxlength="6" name="cp">
            </div>
            <div class="form-group">
                <label>Población:</label>
                <input type="text" class="form-control" placeholder="Población" name="poblacion">
            </div>
            <div class="form-group">
                <label>Provincia:</label>
                <select name="provincia" class="form-control">
                    <option value="A Coruña">A Coruña</option>
                    <option value="Álava">Álava</option>
                    <option value="Albacete">Albacete</option>
                    <option value="Alicante">Alicante</option>
                    <option value="Almería">Almería</option>
                    <option value="Asturias">Asturias</option>
                    <option value="Ávila">Ávila</option>
                    <option value="Badajoz">Badajoz</option>
                    <option value="Baleares">Baleares</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Burgos">Burgos</option>
                    <option value="Cáceres">Cáceres</option>
                    <option value="Cádiz">Cádiz</option>
                    <option value="Cantabria">Cantabria</option>
                    <option value="Castellón">Castellón</option>
                    <option value="Ceuta">Ceuta</option>
                    <option value="Ciudad Real">Ciudad Real</option>
                    <option value="Córdoba">Córdoba</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Girona">Girona</option>
                    <option value="Granada">Granada</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Guipuzcoa">Guipuzcoa</option>
                    <option value="Huelva">Huelva</option>
                    <option value="Huesca">Huesca</option>
                    <option value="Jaén">Jaén</option>
                    <option value="La Rioja">La Rioja</option>
                    <option value="Las Palmas">Las Palmas</option>
                    <option value="León">León</option>
                    <option value="Lleida">Lleida</option>
                    <option value="Lugo">Lugo</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Málaga">Málaga</option>
                    <option value="Melilla">Melilla</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Navarra">Navarra</option>
                    <option value="Ourense">Ourense</option>
                    <option value="Palencia">Palencia</option>
                    <option value="Pontevedra">Pontevedra</option>
                    <option value="Salamanca">Salamanca</option>
                    <option value="Tenerife">Tenerife</option>
                    <option value="Segovia">Segovia</option>
                    <option value="Sevilla">Sevilla</option>
                    <option value="Soria">Soria</option>
                    <option value="Tarragona">Tarragona</option>
                    <option value="Teruel">Teruel</option>
                    <option value="Toledo">Toledo</option>
                    <option value="Valencia">Valencia</option>
                    <option value="Valladolid">Valladolid</option>
                    <option value="Vizcaya">Vizcaya</option>
                    <option value="Zamora">Zamora</option>
                    <option value="Zaragoza">Zaragoza</option>
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block">Crear</button>
                </div>
                <div class="col-md-6">
                    <a href="menu_administrador.php" class="btn btn-danger btn-block" role="button">Menú</a>
                </div>
            </div>

        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
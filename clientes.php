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
    <h1 class="text-center display-4 pb-4">Clientes</h1>
</div>


<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-md-3 p-4">
            <button type="button" class="btn btn-info btn-block" id="boton-crear-cliente">CREAR CLIENTE</button>
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
            <table class="table table-hover table-sm table-responsive-sm" style="margin-bottom: 120px;">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>EMPRESA</th>
                    <th>CONTACTO</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>PROVINCIA</th>
                    <th>ACCIONES</th>
                </tr>
                <?php
                $sql = "SELECT * FROM clientes ORDER BY nombre";
                $respuesta = mysqli_query($conexion, $sql);
                while ($registro = mysqli_fetch_assoc($respuesta)) : ?>
                    <tr>
                        <td><?= $registro['id']; ?></td>
                        <td><?= $registro['nombre']; ?></td>
                        <td><?= $registro['persona_contacto']; ?></td>
                        <td><?= $registro['telefono']; ?></td>
                        <td><?= $registro['email']; ?></td>
                        <td><?= $registro['provincia']; ?></td>
                        <td>
                            <a href="<?= $_SERVER['PHP_SELF'] . '?id=' . $registro['id'] ?>;" class="btn btn-info" id="boton-modificar-cliente" role="button">MODIFICAR</a>
                            <a href="bbdd/opciones_clientes.php?id=<?= $registro['id'] ?>&eliminar_cliente" class="btn btn-info" role="button">ELIMINAR</a>
                        </td>
                    </tr>

                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>

</div>


<!-- MENU DESPLEGABLE NUEVO CLIENTE -->
<div class="container-fluid p-4" id="menu_crear_cliente">
    <h6 class="text-right" id="cierre_crear_cliente">(x)</h6>
    <h2 class="text-center">Nuevo Cliente</h2>
    <form action="bbdd/opciones_clientes.php" method="POST">

        <div class="form-group mt-4">
            <label>Empresa:</label>
            <input type="text" class="form-control" placeholder="Denominación Comercial" name="nombre" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Persona de contacto:</label>
                    <input type="text" class="form-control" placeholder="Persona de contacto" name="persona_contacto" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Móvil Personal:</label>
                    <input type="text" class="form-control" placeholder="Teléfono" name="movil">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Teléfono 1:</label>
                    <input type="text" class="form-control" placeholder="Teléfono Principal" name="telefono1" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Teléfono 2:</label>
                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Email 1:</label>
                    <input type="email" class="form-control" placeholder="Email Principal" name="email1" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-4">
                    <label>Email 2:</label>
                    <input type="email" class="form-control" placeholder="Email" name="email2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="form-group mt-4">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" placeholder="Calle, número, piso, letra" name="direccion" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mt-4">
                    <label>CP:</label>
                    <input type="text" class="form-control" placeholder="C. Postal" name="cp" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="form-group mt-4">
                    <label>Población:</label>
                    <input type="text" class="form-control" placeholder="Población" name="poblacion" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mt-4">
                    <label>Provincia:</label>
                    <select name="provincia" class="form-control">
                        <option value="A CORUÑA">A CORUÑA</option>
                        <option value="ALAVA">ALAVA</option>
                        <option value="ALBACETE">ALBACETE</option>
                        <option value="ALICANTE">ALICANTE</option>
                        <option value="ALMERIA">ALMERIA</option>
                        <option value="ASTURIAS">ASTURIAS</option>
                        <option value="AVILA">AVILA</option>
                        <option value="BADAJOZ">BADAJOZ</option>
                        <option value="BALEARES">BALEARES</option>
                        <option value="BARCELONA">BARCELONA</option>
                        <option value="BURGOS">BURGOS</option>
                        <option value="CACERES">CACERES</option>
                        <option value="CADIZ">CADIZ</option>
                        <option value="CANTABRIA">CANTABRIA</option>
                        <option value="CASTELLON">CASTELLON</option>
                        <option value="CEUTA">CEUTA</option>
                        <option value="CIUDAD REAL">CIUDAD REAL</option>
                        <option value="CORDOBA">CORDOBA</option>
                        <option value="CUENCA">CUENCA</option>
                        <option value="GERONA">GERONA</option>
                        <option value="GRANADA">GRANADA</option>
                        <option value="GUADALAJARA">GUADALAJARA</option>
                        <option value="GUIPUZCOA">GUIPUZCOA</option>
                        <option value="HUELVA">HUELVA</option>
                        <option value="HUESCA">HUESCA</option>
                        <option value="JAEN">JAEN</option>
                        <option value="LA RIOJA">LA RIOJA</option>
                        <option value="LAS PALMAS">LAS PALMAS</option>
                        <option value="LEON">LEON</option>
                        <option value="LERIDA">LERIDA</option>
                        <option value="LUGO">LUGO</option>
                        <option value="MADRID">MADRID</option>
                        <option value="MALAGA">MALAGA</option>
                        <option value="MELILLA">MELILLA</option>
                        <option value="MURCIA">MURCIA</option>
                        <option value="NAVARRA">NAVARRA</option>
                        <option value="OURENSE">OURENSE</option>
                        <option value="PALENCIA">PALENCIA</option>
                        <option value="PONTEVEDRA">PONTEVEDRA</option>
                        <option value="SALAMANCA">SALAMANCA</option>
                        <option value="SEGOVIA">SEGOVIA</option>
                        <option value="SEVILLA">SEVILLA</option>
                        <option value="SANTA CRUZ DE TENERIFE">S. CRUZ TENERIFE</option>
                        <option value="SORIA">SORIA</option>
                        <option value="TARRAGONA">TARRAGONA</option>
                        <option value="TERUEL">TERUEL</option>
                        <option value="TOLEDO">TOLEDO</option>
                        <option value="VALENCIA">VALENCIA</option>
                        <option value="VALLADOLID">VALLADOLID</option>
                        <option value="VIZCAYA">VIZCAYA</option>
                        <option value="ZAMORA">ZAMORA</option>
                        <option value="ZARAGOZA">ZARAGOZA</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mt-4">
            <label>Notas:</label>
            <textarea class="form-control" name="notas" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-info btn-estandar mt-2" style="margin-bottom: 100px;" name="crear_cliente">CREAR</button>

    </form>

</div>


<?php if (isset($_GET['id'])) {

    $id = $_GET["id"];

    //CONSULTA PARA MOSTRAR LOS DATOS DEL CLIENTE A MODIFICAR
    $peticion2 = mysqli_query($conexion, "SELECT * FROM clientes WHERE id=$id");
    $modificar = mysqli_fetch_assoc($peticion2);

?>


    <!-- MENU DESPLEGABLE MODIFICAR CLIENTE -->

    <div class="container-fluid p-4" id="menu_modificar_cliente">
        <div class="col-md-12">
            <h6 class="text-right" id="cierre_modificar_cliente">(x)</h6>
            <h2 class="text-center">Modificar Cliente</h2>

            <form action="bbdd/opciones_clientes.php?id=<?= $modificar['id'] ?>" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>ID:</label>
                            <input type="number" class="form-control" name="id" value="<?= $modificar['id']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group mt-4">
                            <label>Nombre Cliente:</label>
                            <input type="text" class="form-control" name="nombre" value="<?= $modificar['nombre']; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Persona de Contacto:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['persona_contacto']; ?>" name="persona_contacto" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Móvil:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['movil']; ?>" name="movil">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Teléfono 1:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['telefono']; ?>" name="telefono1" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Teléfono 2:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['telefono2']; ?>" name="telefono2">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['email']; ?>" name="email1" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Email 2:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['email2']; ?>" name="email2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" maxlength="200" value="<?= $modificar['direccion']; ?>" name="direccion" required>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>CP:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['cp']; ?>" name="cp" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Población:</label>
                            <input type="text" class="form-control" maxlength="200" value="<?= $modificar['poblacion']; ?>" name="poblacion" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Provincia:</label>
                            <select name="provincia" class="form-control">
                                <option value="<?= $modificar['provincia']; ?>"><?= $modificar['provincia']; ?></option>
                                <option value="A CORUÑA">A CORUÑA</option>
                                <option value="ALAVA">ALAVA</option>
                                <option value="ALBACETE">ALBACETE</option>
                                <option value="ALICANTE">ALICANTE</option>
                                <option value="ALMERIA">ALMERIA</option>
                                <option value="ASTURIAS">ASTURIAS</option>
                                <option value="AVILA">AVILA</option>
                                <option value="BADAJOZ">BADAJOZ</option>
                                <option value="BALEARES">BALEARES</option>
                                <option value="BARCELONA">BARCELONA</option>
                                <option value="BURGOS">BURGOS</option>
                                <option value="CACERES">CACERES</option>
                                <option value="CADIZ">CADIZ</option>
                                <option value="CANTABRIA">CANTABRIA</option>
                                <option value="CASTELLON">CASTELLON</option>
                                <option value="CEUTA">CEUTA</option>
                                <option value="CIUDAD REAL">CIUDAD REAL</option>
                                <option value="CORDOBA">CORDOBA</option>
                                <option value="CUENCA">CUENCA</option>
                                <option value="GERONA">GERONA</option>
                                <option value="GRANADA">GRANADA</option>
                                <option value="GUADALAJARA">GUADALAJARA</option>
                                <option value="GUIPUZCOA">GUIPUZCOA</option>
                                <option value="HUELVA">HUELVA</option>
                                <option value="HUESCA">HUESCA</option>
                                <option value="JAEN">JAEN</option>
                                <option value="LA RIOJA">LA RIOJA</option>
                                <option value="LAS PALMAS">LAS PALMAS</option>
                                <option value="LEON">LEON</option>
                                <option value="LERIDA">LERIDA</option>
                                <option value="LUGO">LUGO</option>
                                <option value="MADRID">MADRID</option>
                                <option value="MALAGA">MALAGA</option>
                                <option value="MELILLA">MELILLA</option>
                                <option value="MURCIA">MURCIA</option>
                                <option value="NAVARRA">NAVARRA</option>
                                <option value="OURENSE">OURENSE</option>
                                <option value="PALENCIA">PALENCIA</option>
                                <option value="PONTEVEDRA">PONTEVEDRA</option>
                                <option value="SALAMANCA">SALAMANCA</option>
                                <option value="SEGOVIA">SEGOVIA</option>
                                <option value="SEVILLA">SEVILLA</option>
                                <option value="SANTA CRUZ DE TENERIFE">S. CRUZ TENERIFE</option>
                                <option value="SORIA">SORIA</option>
                                <option value="TARRAGONA">TARRAGONA</option>
                                <option value="TERUEL">TERUEL</option>
                                <option value="TOLEDO">TOLEDO</option>
                                <option value="VALENCIA">VALENCIA</option>
                                <option value="VALLADOLID">VALLADOLID</option>
                                <option value="VIZCAYA">VIZCAYA</option>
                                <option value="ZAMORA">ZAMORA</option>
                                <option value="ZARAGOZA">ZARAGOZA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>Notas:</label>
                    <textarea class="form-control" value="<?=$modificar['notas'];?>" name="notas" cols="30" rows="10"></textarea>
                </div>

                <div class="row" style="margin-bottom: 100px;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block" name="modificar_cliente">MODIFICAR</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

<?php }; ?>


<?php include 'includes/footer.php'; ?>
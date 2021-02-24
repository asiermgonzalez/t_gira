<?php
session_start();
include 'bbdd/conexion.php';

//Consulta a la tabla configuracion para obtener la configuracion general
$consulta = mysqli_query($conexion, "SELECT * FROM configuracion");
$registro = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t_GIRA</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: <?= $registro['color_fondo']; ?>;
        }

        .btn-estandar {
            width: 260px;
        }

        .cabecera__ {
            border-bottom: 3px solid <?= $registro['color_borde_cabecera']; ?>;
            background-color: <?= $registro['color_fondo_cabecera']; ?>;
            box-shadow: 3px 3px 9px grey;
        }

        .imagen-cabecera__ {
            width: 150px;
        }

        .cabecera__ h1 {
            margin-top: -50px;
        }

        #formulario-login__ {
            margin-top: 60px;
        }

        #boton-desplegar-modificar:active #menu_desplegable_modificar__ {
            display: block;
        }

        #menu_desplegable_tareas__ {
            display: none;
            box-shadow: 3px 3px 9px grey;
            margin-bottom:100px;
        }

        #menu_desplegable_modificar__,
        #menu_desplegable_asignar__{
            box-shadow: 3px 3px 9px grey;
            margin-bottom:100px;
        }

        #clic_cierre_tareas__,
        #clic_cierre_modificar__,
        #clic_cierre_asignar__{
            cursor: pointer;
        }

        .footer__ {
            background-color: #6c757d !important;
        }

        /* MEDIA QUERYS */

        /*MOVILES GRANDES*/
        @media(max-width:480px) {
            .imagen-cabecera__ {
                width: 100px;
            }

            .titulo__ {
                font-size: 20px;
                text-align: right !important;
            }

            td {
                font-size: 10px;
            }

            .btn_responsive {
                font-size: 10px;
                width: 70px;
            }

            .footer--texto__ {
                font-size: 15px;
            }
        }

        /*MOVILES PEQUEÑOS*/
        @media(max-width:380px) {
            td {
                font-size: 8px;
            }

            .btn_responsive {
                font-size: 8px;
                width: 50px;
            }
        }
    </style>
</head>

<body>
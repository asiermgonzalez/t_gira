<style>
    :root {
        --verdeClaro: rgb(0, 191, 156);
        --azul: rgb(0,191,230);

    }

    #formulario-login__ {
        margin-top: 60px;
        padding:30px;
    }

    .btn:hover{
        box-shadow: 3px 3px 9px grey;
        transition-duration: 200ms;
    }

    .fondo_verde {
        background-color: var(--verdeClaro) !important;
        color: black !important;
        
    }

    #cambiarVerde1,
    #cambiarVerde2,
    #cambiarVerde3,
    #cambiarVerde4,
    #cambiarVerde5,
    #cambiarVerde6,
    #cambiarVerde7,
    #cambiarVerde8,
    #cambiarVerde9,
    #cambiarVerde10,
    #cambiarVerde11,
    #cambiarVerde12 {
        cursor: pointer;
    }

    .btn-estandar {
        width: 260px;
    }

    .cabecera__ {
        border-bottom: 3px solid <?= $registro['color_borde_cabecera']; ?>;
        background-color: <?= $registro['color_fondo_cabecera']; ?>;
    }

    .borde-inferior {
        border-bottom: 3px solid <?= $registro['color_borde_cabecera']; ?>;
    }

    .borde-derecho {
        border-right: 3px solid <?= $registro['color_borde_cabecera']; ?>;
    }

    .imagen-cabecera__ {
        width: 150px;
    }

    .cabecera__ h1 {
        margin-top: -50px;
    }

  
/*
    #boton-desplegar-modificar:active #menu_desplegable_modificar__ {
        display: block;
    }
*/
    /*** TAREAS */

    #menu_crear_tarea, #menu_crear_cliente{
        position: absolute;
        top:123px;
        display: none;
        box-shadow: 3px 3px 9px black;
        background-color: white;
    }

    #menu_modificar_cliente,
    #menu_modificar_tarea{
        position: absolute;
        top:123px;
        box-shadow: 3px 3px 9px black;
        background-color: white;
    }
    



    #cierre_crear_tarea, #cierre_modificar_tarea, #cierre_crear_cliente, #cierre_modificar_cliente {
        cursor: pointer;
    }

 

    /*** USUARIOS */

    .footer__ {
        background-color: #6c757d !important;
    }

    /* MEDIA QUERYS */

    /*MOVILES GRANDES*/
    @media(max-width:480px) {
        .imagen-cabecera__ {
            width: 100px;
        }

        .cabecera__ h1{
            font-size: 20px;
            margin-top: -20px;

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
<?php

class Configuracion
{
    //ATRIBUTOS DE CLASE
    private $id;
    private $color_cabecera;
    private $color_texto_cabecera;
    private $color_borde_cabecera;
    private $logotipo_cabecera;
    private $color_cuerpo;
    private $color_pie;
    private $color_texto_pie;
    private $color_borde_pie;
    private $color_fondo_tabla;

    //CONSTRUCTOR
    function __construct($id, $color_cabecera, $color_texto_cabecera, $color_borde_cabecera, $logotipo_cabecera, $color_cuerpo, $color_pie, $color_texto_pie, $color_borde_pie, $color_fondo_tabla)
    {
        $this->id = $id;
        $this->color_cabecera=$color_cabecera;
        $this->color_texto_cabecera=$color_texto_cabecera;
        $this->color_borde_cabecera=$color_borde_cabecera;
        $this->logotipo_cabecera=$logotipo_cabecera;
        $this->color_cuerpo=$color_cuerpo;
        $this->color_pie=$color_pie;
        $this->color_texto_pie=$color_texto_pie;
        $this->color_borde_pie=$color_borde_pie;
        $this->color_fondo_tabla=$color_fondo_tabla;
    }

    //GETTERS AND SETTERS
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getColorCabecera()
    {
        return $this->color_cabecera;
    }

    public function setColorCabecera($color_cabecera)
    {
        $this->color_cabecera = $color_cabecera;
    }

    public function getColorTextoCabecera()
    {
        return $this->color_texto_cabecera;
    }

    public function setColorTextoCabecera($color_texto_cabecera)
    {
        $this->color_texto_cabecera = $color_texto_cabecera;
    }

    public function getColorBordeCabecera()
    {
        return $this->color_borde_cabecera;
    }

    public function setColorBordeCabecera($color_borde_cabecera)
    {
        $this->color_borde_cabecera = $color_borde_cabecera;
    }

    public function getLogotipoCabecera()
    {
        return $this->logotipo_cabecera;
    }

    public function setLogotipoCabecera($logotipo_cabecera)
    {
        $this->logotipo_cabecera = $logotipo_cabecera;
    }

    public function getColorCuerpo()
    {
        return $this->color_cuerpo;
    }

    public function setColorCuerpo($color_cuerpo)
    {
        $this->color_cuerpo = $color_cuerpo;
    }

    public function getColorPie()
    {
        return $this->color_pie;
    }

    public function setColorPie($color_pie)
    {
        $this->color_pie = $color_pie;
    }

    public function getColorTextoPie()
    {
        return $this->color_texto_pie;
    }

    public function setColorTextoPie($color_texto_pie)
    {
        $this->color_texto_pie = $color_texto_pie;
    }

    public function getColorBordePie()
    {
        return $this->color_borde_pie;
    }

    public function setColorBordePie($color_borde_pie)
    {
        $this->color_borde_pie = $color_borde_pie;
    }

    public function getColorFondoTabla()
    {
        return $this->color_fondo_tabla;
    }

    public function setColorFondoTabla($color_fondo_tabla)
    {
        $this->color_fondo_tabla = $color_fondo_tabla;
    }


    //FUNCIONES DEL PROGRAMADOR

    function modificarConfiguracion($id, $color_cabecera, $color_texto_cabecera, $color_borde_cabecera, $logotipo_cabecera, $color_cuerpo, $color_pie, $color_texto_pie, $color_borde_pie, $color_fondo_tabla, $conexion)
    {
        $modificar = mysqli_query($conexion, "UPDATE configuracion SET 
            color_cabecera='$color_cabecera', 
            color_texto_cabecera='$color_texto_cabecera', 
            color_borde_cabecera='$color_borde_cabecera', 
            logotipo_cabecera='$logotipo_cabecera',
            color_cuerpo='$color_cuerpo',
            color_pie='$color_pie',
            color_texto_pie='$color_texto_pie',
            color_borde_pie='$color_borde_pie',
            color_fondo_tabla='$color_fondo_tabla'
            WHERE id=$id");

        //Creamos una sesión para el mensaje de alerta
        if ($modificar) {
            session_start();
            eliminar_alertas();
            $_SESSION['configuracion_modificada'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['configuracion_modificada_error'] = "ERROR";
        }
    }

   
}

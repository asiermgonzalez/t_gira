<?php

class Tarea
{
    //Atributos de clase
    private $id;
    private $nombre;
    private $f1;
    private $f2;
    private $f3;
    private $f4;
    private $f5;
    private $f6;
    private $f7;
    private $f8;
    private $f9;
    private $f10;
    private $f11;
    private $f12;

    /**
     * Constructor
     */
    function __construct($id, $nombre, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->f1 = $f1;
        $this->f2 = $f2;
        $this->f3 = $f3;
        $this->f4 = $f4;
        $this->f5 = $f5;
        $this->f6 = $f6;
        $this->f7 = $f7;
        $this->f8 = $f8;
        $this->f9 = $f9;
        $this->f10 = $f10;
        $this->f11 = $f11;
        $this->f12 = $f12;
    }

    /**
     * Getters and Setters
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getF1()
    {
        return $this->f1;
    }

    public function setF1($f1)
    {
        $this->f1 = $f1;
    }

    public function getF2()
    {
        return $this->f2;
    }

    public function setF2($f2)
    {
        $this->f2 = $f2;
    }

    public function getF3()
    {
        return $this->f3;
    }

    public function setF3($f3)
    {
        $this->f3 = $f3;
    }

    public function getF4()
    {
        return $this->f4;
    }

    public function setF4($f4)
    {
        $this->f4 = $f4;
    }

    public function getF5()
    {
        return $this->f5;
    }

    public function setF5($f5)
    {
        $this->f5 = $f5;
    }

    public function getF6()
    {
        return $this->f6;
    }

    public function setF6($f6)
    {
        $this->f6 = $f6;
    }

    public function getF7()
    {
        return $this->f7;
    }

    public function setF7($f7)
    {
        $this->f7 = $f7;
    }

    public function getF8()
    {
        return $this->f8;
    }

    public function setF8($f8)
    {
        $this->f8 = $f8;
    }

    public function getF9()
    {
        return $this->f9;
    }

    public function setF9($f9)
    {
        $this->f9 = $f9;
    }

    public function getF10()
    {
        return $this->f10;
    }

    public function setF10($f10)
    {
        $this->f10 = $f10;
    }

    public function getF11()
    {
        return $this->f11;
    }

    public function setF11($f11)
    {
        $this->f11 = $f11;
    }

    public function getF12()
    {
        return $this->f12;
    }

    public function setF12($f12)
    {
        $this->f12 = $f12;
    }

    /**
     * crearTarea
     */
    function crearTarea($nombre, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $conexion)
    {

        $insertar = mysqli_query($conexion, "INSERT INTO tarea VALUES(NULL, '$nombre', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$f12')");

        if ($insertar) {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_creada'] = "Se ha creado la tarea";
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_creada_error'] = "ERROR";
        }
    }

    /**
     * modificarTarea
     */
    function modificarTarea($id, $nombre, $f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $conexion)
    {
        $modificar = mysqli_query($conexion, "UPDATE tarea SET nombre='$nombre', f1='$f1', f2='$f2', f3='$f3', f4='$f4', f5='$f5', f6='$f6', f7='$f7', f8='$f8', f9='$f9', f10='$f10', f11='$f11', f12='$f12' WHERE id=$id");

        //Creamos una sesión para el mensaje de alerta
        if ($modificar) {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_modificada'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_modificada_error'] = "ERROR";
        }
    }

    /**
     * eliminarTarea
     */
    function eliminarTarea($id, $conexion)
    {
        $eliminar = mysqli_query($conexion, "DELETE FROM tarea WHERE id='$id'");

        //Creamos una sesión para el mensaje de alerta
        if ($eliminar) {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_eliminada'] = 'Ok';
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['tarea_eliminada_error'] = "ERROR";
        }
    }

    


}

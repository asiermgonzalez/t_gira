<?php

class Cliente
{
    private $id;
    private $nombre;
    private $persona_contacto;
    private $movil;
    private $telefono;
    private $telefono2;
    private $email;
    private $email2;
    private $direccion;
    private $cp;
    private $poblacion;
    private $provincia;
    private $notas;

    //Constructores
    function __construct($id, $nombre, $persona_contacto, $movil, $telefono, $telefono2, $email, $email2, $direccion, $cp, $poblacion, $provincia, $notas)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->persona_contacto = $persona_contacto;
        $this->movil = $movil;
        $this->telefono = $telefono;
        $this->telefono2 = $telefono2;
        $this->email = $email;
        $this->email2 = $email2;
        $this->direccion = $direccion;
        $this->cp = $cp;
        $this->poblacion = $poblacion;
        $this->provincia = $provincia;
        $this->notas = $notas;
    }


    //Getters and Setters
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

    public function getPersona_contacto()
    {
        return $this->persona_contacto;
    }

    public function setPersona_contacto($persona_contacto)
    {
        $this->persona_contacto = $persona_contacto;
    }

    public function getMovil()
    {
        return $this->movil;
    }

    public function setMovil($movil)
    {
        $this->movil = $movil;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono2()
    {
        return $this->telefono2;
    }

    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail2()
    {
        return $this->email2;
    }

    public function setEmail2($email2)
    {
        $this->email2 = $email2;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getPoblacion()
    {
        return $this->poblacion;
    }

    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    public function getNotas()
    {
        return $this->notas;
    }

    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    //Funciones del Programador
    public function crearCliente($nombre, $persona_contacto, $movil, $telefono, $telefono2, $email, $email2, $direccion, $cp, $poblacion, $provincia, $notas, $conexion)
    {

        $insertar = mysqli_query($conexion, "INSERT INTO clientes VALUES(NULL, '$nombre', '$persona_contacto', '$movil', '$telefono', '$telefono2', '$email', 
        '$email2', '$direccion', '$cp', '$poblacion', '$provincia', '$notas' )");

        if ($insertar) {
            session_start();
            eliminar_alertas();
            $_SESSION['cliente_creado'] = "Se ha creado el cliente";
        } else {
            session_start();
            eliminar_alertas();
            $_SESSION['cliente_creado_error'] = "ERROR";
        }
    }

    public function eliminarCliente($id, $conexion)
    {
        $eliminar = mysqli_query($conexion, "DELETE FROM clientes WHERE id='$id'");
    }
}

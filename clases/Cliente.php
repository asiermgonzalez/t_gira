<?php

class Cliente
{
    private $id;
    private $nombre;
    private $persona_contacto;
    private $telefono;
    private $email;
    private $direccion;
    private $cp;
    private $poblacion;
    private $provincia;
    

    //Constructores
    function __construct($id, $nombre, $persona_contacto, $telefono, $email, $direccion, $cp, $poblacion, $provincia)
    {
        $this->id=$id;
        $this->nombre = $nombre;
        $this->persona_contacto=$persona_contacto;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion=$direccion;
        $this->cp=$cp;
        $this->poblacion=$poblacion;
        $this->provincia=$provincia;
    }


    //Getters and Setters
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

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
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

    //Funciones del Programador
    public function crearCliente($nombre, $persona_contacto, $telefono, $email, $direccion, $cp, $poblacion, $provincia,  $conexion){

        $insertar=mysqli_query($conexion, "INSERT INTO clientes VALUES(NULL, '$nombre', '$persona_contacto', '$telefono', '$email', '$direccion', '$cp', '$poblacion',
        '$provincia' )");
    }

    public function eliminarCliente($id, $conexion){
        $eliminar=mysqli_query($conexion, "DELETE FROM clientes WHERE id='$id'");
    }


   
}

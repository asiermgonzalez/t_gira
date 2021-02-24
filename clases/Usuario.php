<?php

class Usuario{

    protected $email;
    protected $password;
    protected $nombre;
    protected $apellido;
    protected $telefono;
    protected $rol;

    //Constructor
    public function __construct($email, $password, $nombre, $apellido, $telefono, $rol)
    {
        $this->email=$email;
        $this->password=$password;
        $this->nombre = $nombre;
        $this->apellido=$apellido;
        $this->telefono = $telefono;
        $this->rol=$rol;
    }

       //Getters and Setters
       public function getEmail()
       {
           return $this->email;
       }
   
       public function setEmail($email)
       {
           $this->email = $email;
       }

       public function getPassword()
       {
           return $this->password;
       }
   
       public function setPassword($password)
       {
           $this->password = $password;
       }

       public function getNombre()
       {
           return $this->nombre;
       }
   
       public function setNombre($nombre)
       {
           $this->nombre = $nombre;
       }
   
       public function getApellido()
       {
           return $this->apellido;
       }
   
       public function setApellido($apellido)
       {
           $this->apellido = $apellido;
       }
       public function getTelefono()
       {
           return $this->telefono;
       }
   
       public function setTelefono($telefono)
       {
           $this->telefono = $telefono;
       }

       public function getRol()
       {
           return $this->rol;
       }
   
       public function setRol($rol)
       {
           $this->rol = $rol;
       }
   
       //Funciones del Programador
       public function crearUsuario($email, $password, $nombre, $apellido, $telefono, $rol, $conexion){
   
           $insertar=mysqli_query($conexion, "INSERT INTO usuarios VALUES(NULL, '$email', '$password', '$nombre', '$apellido', '$telefono', '$rol')");
       }


}
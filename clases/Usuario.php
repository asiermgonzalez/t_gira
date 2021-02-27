<?php

class Usuario{

    //ATRIBUTOS DE CLASE
    private $id;
    private $email;
    private $password;
    private $nombre;
    private $apellido;
    private $telefono;
    private $rol;

    //CONSTRUCTOR
    function __construct($id, $email, $password, $nombre, $apellido, $telefono, $rol)
    {
        $this->id=$id;
        $this->email=$email;
        $this->password=$password;
        $this->nombre = $nombre;
        $this->apellido=$apellido;
        $this->telefono = $telefono;
        $this->rol=$rol;
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
   

       //FUNCIONES DEL PROGRAMADOR
       function crearUsuario($email, $password, $nombre, $apellido, $telefono, $rol, $conexion){
   
           $insertar=mysqli_query($conexion, "INSERT INTO usuarios VALUES(NULL, '$email', '$password', '$nombre', '$apellido', '$telefono', '$rol')");
       }

       function modificarUsuario($id, $email, $password, $nombre, $apellido, $telefono, $rol, $conexion)
       {
           $modificar = mysqli_query($conexion, "UPDATE usuarios SET email='$email', password='$password', nombre='$nombre', apellido='$apellido', telefono='$telefono', rol='$rol'  WHERE id=$id");
   
           //Creamos una sesión para el mensaje de alerta
           if ($modificar) {
               session_start();
               eliminar_alertas();
               $_SESSION['usuario_modificado'] = 'Ok';
           } else {
               session_start();
               eliminar_alertas();
               $_SESSION['usuario_modificado_error'] = "ERROR";
           }
       }

       function eliminarUsuario($id, $conexion)
       {
           $eliminar = mysqli_query($conexion, "DELETE FROM usuarios WHERE id='$id'");
   
           //Creamos una sesión para el mensaje de alerta
           if ($eliminar) {
               session_start();
               eliminar_alertas();
               $_SESSION['usuario_eliminado'] = 'Ok';
           } else {
               session_start();
               eliminar_alertas();
               $_SESSION['usuario_eliminado_error'] = "ERROR";
           }
       }

}
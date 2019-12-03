<?php
class ValidarRegistro {
private $nombre;
private $apellido;
private $email;
private $password;

    public function __construct($nombre,$apellido,$email,$password){
          $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->email = $email;
         $this->pass = $pass;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setApellido($apellido){
      $this->apellido = $apellido;
    }

    public function getApellido(){
      return $this->apellido;
    }

    public function setEmail($email){
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email;
    }

    public function setPass($pass){
      $this->pass = $pass;
    }
    
    public function getPass(){
      return $this->pass;
    }


}

 ?>

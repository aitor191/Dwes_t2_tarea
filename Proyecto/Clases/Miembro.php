<?php

abstract class Miembro {

    //ATRIBUTOS
    protected int $id;
    protected $nombre;
    protected $apellidos;
    protected $email;

    //MÉTODOS

    //Constructor
    public function __construct($id, $nombre, $apellidos, $email){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> email = $email;
    }

    //GETTERS&SETTERS
    public function getId() : int {
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }


    public function getNombre()  {
        return $this -> nombre;
    }
    public function setNombre($nombre){
        $this ->nombre = $nombre;
    }


    public function getApellidos(){
        return $this -> apellidos;
    }
    public function setApellidos($apellidos){
        $this -> apellidos = $apellidos;
    }


    public function getEmail(){
        return $this -> email;
    }
    public function setEmail($email){
        $this ->email = $email;
    }

    //toString
    public function toString (){
        return "ID: $this->id" . ", Nombre:  $this->nombre" .  ", Apellidos:  . $this->apellidos" . ", Email:  . $this->email";
    }







}
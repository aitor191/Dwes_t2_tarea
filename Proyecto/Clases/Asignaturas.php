<?php

class Asignatura{
    
    //ATRIBUTOS
    protected $id;
    protected $nombre;
    protected $creditos;

    //CONSTRUCTOR
    public function __construct($id, $nombre, $creditos){
        $this -> id = $id;
        $this -> nombre =$nombre;
        $this -> creditos = $creditos;
    }

    //GETTERS&SETTERS
    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }

    public function getNombre(){
        return $this -> nombre;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function getCreditos(){
        return $this -> creditos;
    }
    public function setCreditos($creditos){
        $this -> creditos = $creditos;
    }

    //CREAR ASIGNATURAS DE MUESTRA
    public function crearAsignaturasDeMuestra(){
        $asignaturas = [
            new Asignatura(1, "DWES", "7 créditos"),
            new Asignatura(2, "DWEC", "6 créditos"),
            new Asignatura(3, "DIW", "4 créditos"),
            new Asignatura(4, "DAW", "4 créditos"),
        ];
        return $asignaturas;
    }
    //toString
    public function __toString(): string {
        return "Nombre: {$this->nombre}, Créditos: {$this->creditos}";
    }
}
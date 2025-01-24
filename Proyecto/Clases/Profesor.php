<?php

class Profesor extends Miembro
{

    //ATRIBUTOS

    protected bool $titular;
    protected $asignatura;

    //MÉTODOS

    //CONSTRUCTOR
    public function __construct($id, $nombre, $apellidos, $email, $asignatura)
    {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->asignatura = $asignatura;
    }

    //GETTERS & SETTERS??

    //CREAR PROFESOR DE MUESTRA
    public static function crearProfesorDeMuestra()
    {
        $profesor = [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW"),
        ];
        return $profesor;

    }

    //toString
    public function toString(){
        return "Nombre: $this->nombre, Apellido: $this->apellidos, Email: $this->email";
    }
}

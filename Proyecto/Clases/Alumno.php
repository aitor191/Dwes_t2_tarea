<?php

class Alumno extends Miembro
{

    //ATRIBUTOS
    private int $edad;
    private $asignaturas = [];
    private bool $cursoAbonado = false;

    //MÉTODOS

    //CONSTRUCTOR + PARENT
    public function __construct($id, $nombre, $apellidos, $email, $edad)
    {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
    }

    //GETTERS&SETTERS
    public function getEdad(): int
    {
        return $this->edad;
    }
    public function setEdad(int $edad)
    {
        $this->edad = $edad;
    }

    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    //abonarCurso()
    public function abonarCurso()
    {
        $this->cursoAbonado = true;
    }

    //matricularseEnAsignatura
    public function matricularEnAsignatura(Asignatura $asignatura){
        foreach ($this->asignaturas as $asignaturaMatriculada) {
            if ($asignaturaMatriculada -> getId() === $asignatura -> getId()) {
                return;
            }
        }
        $this->asignaturas[] = $asignatura;
    }

    public static function crearAlumnosDeMuestra()
    {
        $alumnos = [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
        ];
        return $alumnos;
    }
    //toSting
    public function __toString(): string {
        return "Nombre: {$this->nombre} {$this->apellidos}, Email: {$this->email}";
    }

}
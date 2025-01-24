<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php

    //Require para incluir a las clases
    require 'Clases/Miembro.php';
    require 'Clases/Alumno.php';
    require 'Clases/Profesor.php';
    require 'Clases/Asignaturas.php';


    //Creamos objetos y llamamos a sus metodos
    $alumnos = Alumno::crearAlumnosDeMuestra();
    $profesores = Profesor::crearProfesorDeMuestra();
    $asignaturas = $Asignaturas::crearAsignaturasDeMuestra();

    //Lista de Alumnos
    echo "<h2>Alumnos</h2>";
    foreach ($alumnos as $alumno) {
        echo "<li>$alumno</li><br>";
    }

    //Lista de profesores
    echo "<h2>Profesores</h2>";
    foreach ($profesores as $profesor) {
        echo "<li>$profesor</li><br>";
    }

    //Lista de asignaturas
    echo "<h2>Asignaturas</h2>";
    foreach ($asignaturas as $asignatura) {
        echo "<li>$asignatura</li><br>";
    } 


    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);

    //Alumnos menores de 23
    $alumnosMenores23 = array_filter($alumnos, function ($alumno) {
        return $alumno->getEdad() <= 23;
    });

    //Alumnos con dos asignaturaas
    $alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
        return count($alumno->getAsignaturas()) >= 2;
    });

    ?>
</body>

</html>
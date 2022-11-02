<?php
include '../instituto/Instituto.php';
session_start();

if ($_GET) {
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $dni = $_GET['dni'];
    $direccion = $_GET['direccion'];
    $email = $_GET['email'];

    $agregarAlumno = new Alumno();
    $agregarAlumno -> set_nombre($nombre);
    $agregarAlumno -> set_apellido($apellidos);
    $agregarAlumno -> set_dni($dni);
    $agregarAlumno -> set_direccion($direccion);
    $agregarAlumno -> set_email($email);

    $listaDeAlumnos = $_SESSION["Alumnos"];

    for ($i=0;$i<count($listaDeAlumnos);$i++) {
        if ($listaDeAlumnos[$i]->get_dni() == $dni) {
            $listaDeAlumnos[$i]->set_nombre($nombre);
            $listaDeAlumnos[$i]->set_apellido($apellidos);
            $listaDeAlumnos[$i]->set_direccion($direccion);
            $listaDeAlumnos[$i]->set_email($email);
        }
    }
    $_SESSION['Alumnos'] = $listaDeAlumnos;
    header("Location: listadoalumnos.php");
}
?>
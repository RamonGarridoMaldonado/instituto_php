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


    array_push($_SESSION["Alumnos"] ,$agregarAlumno);
    header("Location: listadoalumnos.php");
}
?>
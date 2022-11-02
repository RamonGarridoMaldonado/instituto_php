<?php

include '../instituto/Instituto.php';
session_start();

if ($_GET) {
    $dni = $_GET['dni'];
    $index = 0;
    $listaDeAlumno = $_SESSION["Alumnos"];
    $nuevaLista = array();
    for ($i=0;$i<count($listaDeAlumno);$i++) {
        if ($listaDeAlumno[$i]->get_dni() == $dni) {
            $index = $i;
        }
    }

    $contador = 0;
    for ($i=0;$i<count($listaDeAlumno);$i++) {
        if ($i!=$index) {
            array_push($nuevaLista,$listaDeAlumno[$i]);
        }
    } 

    $_SESSION['Alumnos'] = $nuevaLista;
    header("Location: listadoalumnos.php");
}

?>
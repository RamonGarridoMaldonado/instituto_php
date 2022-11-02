<?php

include '../instituto/Instituto.php';
session_start();

if ($_GET) {
    $codigo = $_GET['codigo'];
    $index = 0;
    $listaDeAsignaturas = $_SESSION["Asignaturas"];
    $nuevaLista = array();
    for ($i=0;$i<count($listaDeAsignaturas);$i++) {
        if ($listaDeAsignaturas[$i]->get_codigo() == $codigo) {
            $index = $i;
        }
    }

    $contador = 0;
    for ($i=0;$i<count($listaDeAsignaturas);$i++) {
        if ($i!=$index) {
            array_push($nuevaLista,$listaDeAsignaturas[$i]);
        }
    } 

    $_SESSION['Asignaturas'] = $nuevaLista;
    header("Location: listadoasignaturas.php");
}

?>
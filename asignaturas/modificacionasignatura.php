<?php
include '../instituto/Instituto.php';
session_start();

if ($_GET) {
    $codigo = $_GET['codigo'];
    $descripcion = $_GET['descripcion'];

    $agregarAsignatura = new Asignatura();
    $agregarAsignatura -> set_codigo($codigo);
    $agregarAsignatura -> set_descripcion($descripcion);

    $listaDeAsignaturas = $_SESSION["Asignaturas"];

    for ($i=0;$i<count($listaDeAsignaturas);$i++) {
        if ($listaDeAsignaturas[$i]->get_codigo() == $codigo) {
            $listaDeAsignaturas[$i]->set_descripcion($descripcion);
        }
    }
    $_SESSION['Asignaturas'] = $listaDeAsignaturas;
    header("Location: listadoasignaturas.php");
}
?>
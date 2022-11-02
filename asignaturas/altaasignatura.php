<?php
include '../instituto/Instituto.php';
session_start();

if ($_GET) {
    $codigo = $_GET['codigo'];
    $descripcion = $_GET['descripcion'];

    $agregarAsignatura = new Asignatura();
    $agregarAsignatura -> set_codigo($codigo);
    $agregarAsignatura -> set_descripcion($descripcion);

    array_push($_SESSION["Asignaturas"] ,$agregarAsignatura);
    header("Location: listadoasignaturas.php");
}
?>
<?php
    session_start();
    if (!isset($_SESSION) || !isset($_SESSION['Asignaturas'])) {
        $s = '<table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Codigo</b>".'</td>';
        $s .= '<td>'."<b>Descripcion</b>".'</td>';
        $s .= '<td colspan="2">'."<b>Acciones</b>".'</td>';
        $s .= '</tr>';
        $_SESSION["Asignaturas"] = array();
    } else {
        $s = '<h1>Listado de alumnos</h1><table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Codigo</b>".'</td>';
        $s .= '<td>'."<b>Descripcion</b>".'</td>';
        $s .= '<td colspan="2">'."<b>Acciones</b>".'</td>';
        $s .= '</tr>';
        foreach (array_unique($_SESSION["Asignaturas"],SORT_REGULAR) as $asignatura ) {
            $s .= '<tr>';
            $codigo = "";
            $descripcion = "";
            $contador = 0;
            foreach ( $asignatura as $valor ) {
                    if ($valor != "Asignatura") {
                        $s .= '<td>'.$valor.'</td>';
                        switch ($contador) {
                            case 0:
                                $codigo = $valor;
                                break;
                            case 1:
                                $descripcion = $valor;
                                break;
                        }
                        $contador++;
                    }
            }
            $s .= '<td><button onclick="window.location.href=\'modificarasignatura.php?codigo='.$codigo.'&descripcion='.$descripcion.'\'">Modificar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'eliminarasignatura.php?codigo='.$codigo.'\'">Eliminar</button></td>';
            $s .= '</tr>';
            $contador = 0;
        }   
    }
$s .= '</table>';
echo $s;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Asignaturas</title>
</head>
<body>
    <br/>
    <button onclick="location.href='nuevaasignatura.php'">Nueva Asignatura</button>
    <button onclick="location.href='index.html'">Volver a INDEX</button>
</body>
</html>
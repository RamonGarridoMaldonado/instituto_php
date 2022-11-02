<?php
    session_start();
    if (!isset($_SESSION) || !isset($_SESSION['Alumnos'])) {
        $s = '<table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Nombre</b>".'</td>';
        $s .= '<td>'."<b>Apellidos</b>".'</td>';
        $s .= '<td>'."<b>DNI</b>".'</td>';
        $s .= '<td>'."<b>Direccion</b>".'</td>';
        $s .= '<td>'."<b>Email</b>".'</td>';
        $s .= '<td colspan="2">'."<b>Acciones</b>".'</td>';
        $s .= '</tr>';
        $_SESSION["Alumnos"] = array();
    } else {
        $s = '<h1>Listado de alumnos</h1><table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Nombre</b>".'</td>';
        $s .= '<td>'."<b>Apellidos</b>".'</td>';
        $s .= '<td>'."<b>DNI</b>".'</td>';
        $s .= '<td>'."<b>Direccion</b>".'</td>';
        $s .= '<td>'."<b>Email</b>".'</td>';
        $s .= '<td colspan="2">'."<b>Acciones</b>".'</td>';
        $s .= '</tr>';
        foreach (array_unique($_SESSION["Alumnos"],SORT_REGULAR) as $alumno ) {
            $s .= '<tr>';
            $nombre = "";
            $apellidos = "";
            $dni = "";
            $direccion = "";
            $email = "";
            $contador = 0;
            foreach ( $alumno as $valor ) {
                    if ($valor != "Alumno") {
                        $s .= '<td>'.$valor.'</td>';
                        switch ($contador) {
                            case 0:
                                $nombre = $valor;
                                break;
                            case 1:
                                $apellidos = $valor;
                                break;
                            case 2:
                                $dni = $valor;
                                break;
                            case 3: 
                                $direccion = $valor;
                                break;
                            case 4:
                                $email = $valor;
                                break;
                        }
                        $contador++;
                    }
            }
            $s .= '<td><button onclick="window.location.href=\'modificaralumno.php?nombre='.$nombre.'&apellidos='.$apellidos.'&dni='.$dni.'&direccion='.$direccion.'&email='.$email.'\'">Modificar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'eliminaralumno.php?dni='.$dni.'\'">Eliminar</button></td>';
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
    <title>Document</title>
</head>
<body>
    <br/>
    <button onclick="location.href='nuevoAlumno.php'">Nuevo alumno</button>
    <button onclick="location.href='index.html'">Volver a INDEX</button>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Alumno</title>
</head>
<body>
    <form action="modificacionalumno.php" method="get">
        <h1>Modificar Alumno</h1>
        <label>Nombre:</lable>
        <input type="text" name="nombre" value="<?php echo $_GET['nombre']; ?>">
        <br/>
        <label>Apellidos:</lable>
        <input type="text" name="apellidos" value="<?php echo $_GET['apellidos']; ?>">
        <br/>
        <label>Direccion:</lable>
        <input type="text" name="direccion" value="<?php echo $_GET['direccion']; ?>"><br/>
        <label>Email:</lable>
        <input type="text" name="email" value="<?php echo $_GET['email']; ?>"><br/>
        <input type="hidden" value="<?php echo $_GET['dni']; ?>" name="dni">
        <input type="submit">
        <br/>
    </form>
</body>
</html>
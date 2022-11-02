<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Asignatura</title>
</head>
<body>
    <form action="modificacionasignatura.php" method="get">
        <h1>Modificar Asignatura</h1>
        <label>Descripcion:</lable>
        <input type="text" name="descripcion" value="<?php echo $_GET['descripcion']; ?>">
        <input type="hidden" value="<?php echo $_GET['codigo']; ?>" name="codigo">
        <input type="submit">
        <br/>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$nombrecompleto = $_POST["nombrecompleto"];
$sexo = $_POST["sexo"];
$fechanacimiento = $_POST["fechanacimiento"];
$DNI = $_POST["DNI"];
$localidad = $_POST["localidad"];
$descripcion = $_POST["descripcion"];
$animalfav = $_POST["animalfav"];
require_once("../config/database.php");
$sql = "INSERT INTO usuarios (usuario, contraseña, nombrecompleto, sexo, fechanacimiento, DNI, localidad, descripcion, animalfav) VALUES ('$usuario', '$contraseña', '$nombrecompleto', '$sexo', '$fechanacimiento', $DNI, '$localidad', '$descripcion', '$animalfav');";
$result = $link->query($sql);

if ($result) {
    header("Location: ./Login.php");
    exit();
} else {
    echo "Algo anda mal :B";
}
?>
<li><a class="btn" href="Añadir.php">Volver al Ingreso</a></li>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
<?php
$nombre = $_POST["nombre"];
$especie = $_POST["especie"];
$sexo = $_POST["sexo"];
$razacolor = $_POST["razacolor"];
$edad = $_POST["edad1"];
$meses = $_POST["edad2"];
$localidad = $_POST["localidad"];
$descripcion = $_POST["descripcion"];
$fecharescate = $_POST["fecharescate"];

// Convertir meses a fracción de año
$fraccion_meses = $meses / 12;
$edadf = $edad + $fraccion_meses;

// Conectar a la base de datos
require_once("../config/database.php");

$sql = "INSERT INTO animales (nombre, especie, sexo, razacolor, edad, localidad, descripcion, fecharescate, adoptado) VALUES ('$nombre','$especie','$sexo','$razacolor',$edadf,'$localidad','$descripcion','$fecharescate', False);";
$result = $link->query($sql);

if ($result) {
    header("Location: ./index.html");
    exit();
} else {
    echo "Algo anda mal :B";
}
?>
<li><a class="btn" href="Añadir.php">Volver al Ingreso</a></li>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
</head>
<body>
<?php
require_once("../config/database.php");
$usuario = $_POST["usuario"];
$contraseña = $_POST["contrasena"];

$sql = "SELECT usuario, contraseña FROM usuarios WHERE usuario ='$usuario';";
$result = $link->query($sql); 
if ($result->num_rows > 0) {
    while ($row_client = $result->fetch_assoc()) {
            if($usuario == $row_client['usuario']){
                if($contraseña == $row_client['contraseña']){
                    header("Location: ../Index.html");
                    exit();
                }else{
                    header("Location: ./Login.php?e=CIncorrecta");
                    exit();
                }
            }
        
    }
}else{
    echo"Usuario Incorrecto o Inexistente";
    header("Location: ./Login.php?e=UIncorrecto");
    exit();
}
?>
<li><a class="btn" href="Login.php">Volver al Ingreso</a></li>
</body>
</html>
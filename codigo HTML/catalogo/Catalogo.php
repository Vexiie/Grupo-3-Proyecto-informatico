<?php 
$especie = isset($_GET['especie']) ? htmlspecialchars($_GET['especie']) : 'Animale'; // Sanitizar entrada
require_once("../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Catalogo de <?php echo htmlspecialchars($especie) . "s"; ?></title>
</head>
<body>
    <nav class="center__row">
        <?php 
        if($especie == "Gato") {
            echo "<h1>Gatalogo</h1>";
        } elseif($especie == "Perro") {
            echo "<h1>Guautalogo</h1>";
        } elseif($especie == "Cobayo") {
            echo "<h1>Cuitalogo</h1>";
        } elseif($especie == "Ave") {
            echo "<h1>Avélogo</h1>";
        } elseif($especie == "Animale") {
            echo "<h1>Nuestro Animales</h1>";
        }
        ?>
         <li><a class="btn" href="../index.html">Volver a la pagina principal</a></li>
    </nav>
    <table>
        <?php
        if($especie == 'Animale') { // Mostrar catálogo completo
            $sql = "SELECT * FROM animales WHERE adoptado=false ORDER BY especie;";
        } else { // Mostrar catálogo de un animal específico
            $sql = "SELECT * FROM animales WHERE adoptado=false AND especie LIKE '$especie';";
        }
        $result = $link->query($sql);
        $cont = 0;
        while ($row_client = mysqli_fetch_array($result)) {
            $cont++;
            if ($cont % 2 == 1) {
                echo "<tr>";
            }
            // Formatear Edad
            $edad = $row_client['edad'];
            if ($edad < 1) {
                $meses = round($edad * 12);
                $edad_formateada = $meses . " " . ($meses == 1 ? "Mes" : "Meses");
            } else {
                $años = floor($edad);
                $edad_formateada = $años . " " . ($años == 1 ? "Año" : "Años");
            }
            echo "
                <td>
                    <h2>" . htmlspecialchars($row_client['nombre']) . "</h2>
                    <div>Raza/Color: " . htmlspecialchars($row_client['razacolor']) . "</div>
                    <div>Sexo: " . htmlspecialchars($row_client['sexo']) . "</div>
                    <div>Edad: " . htmlspecialchars($edad_formateada) . "</div>
                    <div>Encotrado: " . htmlspecialchars($row_client['localidad']) . "</div>
                    <div>Fecha de rescate: " . htmlspecialchars(date('d/m/Y', strtotime($row_client['fecharescate']))) . "</div>
                    <a class='btn' href='perfil.php?id=" . $row_client['ID'] . "'>Ver perfil</a>
                </td>
                <td><img src='fotos/" . htmlspecialchars($row_client['ID']) . ".jpg' alt='Foto de " . htmlspecialchars($row_client['nombre']) . "' /></td>
            ";
            if ($cont % 2 == 0) {
                echo "</tr>";
            }
        }
        ?>
    </table>
    <footer>
            <div class="footer__cont center__row">
                <p>2024 &copyPatitasAlRescate</p>
                <div>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
    </footer>
</body>
</html>
<?php 
$ID = $_GET['id'];
require_once("../config/database.php");

// Use prepared statements to prevent SQL injection
$sql = "SELECT * FROM animales WHERE ID = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $ID);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <?php
    if ($result->num_rows > 0) {
        while ($row_client = $result->fetch_assoc()) {
            echo "<title>Perfil de " . htmlspecialchars($row_client['nombre']) . "</title>";
        ?>
</head>
<body>
    <div class="container">
        <nav class='center__row'>
            <li>
                <a class='btn' href='../index.html'>Volver a la pagina principal</a>
                <?php
                    if (strtolower($row_client['especie']) == "gato") {
                        echo "<a class='btn' href='Catalogo.php?especie=Gato'>Volver al Gatalogo</a>";
                    } elseif (strtolower($row_client['especie']) == "perro") {
                        echo "<a class='btn' href='Catalogo.php?especie=Perro'>Volver al Guautalogo</a>";
                    } elseif (strtolower($row_client['especie']) == "cobayo") {
                        echo "<a class='btn' href='Catalogo.php?especie=Cobayo'>Volver al Cuitalogo</a>";
                    } elseif (strtolower($row_client['especie']) == "ave") {
                        echo "<a class='btn' href='Catalogo.php?especie=Ave'>Volver al Avélogo</a>";
                    }
                ?>
            </li>
        </nav>
        <?php
        // Formatear Edad
        $edad = $row_client['edad'];
        if ($edad < 1) {
            $meses = round($edad * 12);
            $edad_formateada = $meses . " " . ($meses == 1 ? "Mes" : "Meses");
        } else {
            $años = floor($edad);
            $edad_formateada = $años . " " . ($años == 1 ? "Año" : "Años");
        }
        //Formatear Fecha
        $fecha = date('d/m/Y', strtotime($row_client['fecharescate'])) ;
       echo "
        <table>
            <tr>
                <td>
                    <div class='profile-info'>
                        <div class='text-content'>
                            <h1>" . htmlspecialchars($row_client['nombre']) . "</h1>
                            <div>Raza/Color: " . htmlspecialchars($row_client['razacolor']) . "</div>
                            <div>Sexo: " . htmlspecialchars($row_client['sexo']) . "</div>
                            <div>Edad: " . htmlspecialchars($edad_formateada) . "</div>
                            <div>Encontrado: " . htmlspecialchars($row_client['localidad']) . "</div>
                            <div>Fecha de rescate: " . htmlspecialchars($fecha) . "</div>
                            <div>" . htmlspecialchars($row_client['descripcion']) . "</div>
                        </div>
                        <img src='fotos/" . htmlspecialchars($row_client['ID']) . ".jpg' alt='Foto de " . htmlspecialchars($row_client['nombre']) . "' />
                    </div>
                </td>
            </tr>
        </table>";
        }
    } else {
        echo "<p>Animal no encontrado.</p>";
    }
    $stmt->close();
    ?>
    </div>
    <footer>
        <div class="footer__cont center__row">
            <p>2024 &copy; PatitasAlRescate</p>
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
<!DOCTYPE html>
<html>
<head>
    <title>Añadir al catálogo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    tr {
        border: 5px;
    }
</style>
<div class="container mt-5">
    <h1>Ingreso de Animal al Catálogo</h1>
    <a class="btn btn-sm" href="../index.html">Volver al Menú</a>
    <form action="Insert_Animales.php" method="post" class="mt-4">
        <table class="table table-form">
            <tr>
            
                <td>
                    <h3>Datos del Animal</h3>
                </td>       
            <tr>       
                <td>
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control form-control-sm" name="nombre" placeholder="Nombre del Animal" required>
                </td>
                <td>
                    <label for="sexo" class="form-label">Sexo:</label>
                    <select name="sexo" id="sexo" class="form-select form-select-sm" required>
                        <option value="" selected> - </option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="especie" class="form-label">Especie:</label>
                    <select name="especie" id="especie" class="form-select form-select-sm" required>
                        <option value="" selected> - </option>
                        <option value="Perro">Perro/a</option>
                        <option value="Gato">Gato/a</option>
                        <option value="Cobayo">Roedor</option>
                        <option value="Ave">Ave</option>
                    </select>
                </td>
                <td>
                    <label for="razacolor" class="form-label">Raza/Color:</label>
                    <input type="text" class="form-control form-control-sm" name="razacolor" placeholder="Raza o Color del Animal" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="edad1" class="form-label">Años:</label>
                    <input type="number" name="edad1" min="0" class="form-control form-control-sm" placeholder="Año/s" required>
                </td>
                <td>
                    <label for="edad2" class="form-label">Meses:</label>
                    <input type="number" name="edad2" min="0" max="12" class="form-control form-control-sm" placeholder="Mes/es" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="localidad" class="form-label">Localidad:</label>
                    <input type="text" class="form-control form-control-sm" name="localidad" placeholder="Lugar donde fue encontrado" required>
                </td>
                <td>
                    <label for="fecharescate" class="form-label">Fecha de Rescate:</label>
                    <input type="date" class="form-control form-control-sm" name="fecharescate" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <input type="text" class="form-control form-control-sm" name="descripcion" placeholder="Hasta 150 caracteres" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn">Agregar Animal al Catálogo</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

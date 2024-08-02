<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
    <h1 class="h3 mb-4">Registro</h1>
    <a class="btn btn-sm" href="../index.html">Volver al Menú</a>
    <a class="btn btn-sm" href="Login.php">Iniciar sesión</a>
    <form id="registroForm" action="Insert_Usuarios.php" method="post" class="mt-4">
        <table class="table table-form">
            <tr>
            
                <td>
                    <h3>Ingrese sus datos</h3>
                </td>       
            <tr>
                <td>
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control form-control-sm" name="usuario" placeholder="Usuario" required>
                </td>
                <td class="position-relative">
                    <label for="contraseña" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control form-control-sm" name="contraseña" placeholder="Contraseña" id="contraseña" required>
                    <span class="eye-icon" id="togglePassword">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nombrecompleto" class="form-label">Nombre Completo:</label>
                    <input type="text" class="form-control form-control-sm" name="nombrecompleto" placeholder="Nombre Completo" required>
                </td>
                <td class="position-relative">
                    <label for="confirmar_contraseña" class="form-label">Confirmar Contraseña:</label>
                    <input type="password" class="form-control form-control-sm" name="confirmar_contraseña" placeholder="Confirmar Contraseña" id="confirmar_contraseña" required>
                    <span class="eye-icon" id="toggleConfirmPassword">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label for="DNI" class="form-label">DNI:</label>
                    <input type="number" name="DNI" class="form-control form-control-sm" max="99999999" min="0" placeholder="DNI" required>
                </td>
                <td>
                    <label for="fechanacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control form-control-sm" name="fechanacimiento" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="localidad" class="form-label">Localidad:</label>
                    <input type="text" class="form-control form-control-sm" name="localidad" placeholder="Localidad (opcional)">
                </td>
                <td>
                    <label for="animalfav" class="form-label">Animal Favorito:</label>
                    <select name="animalfav" id="animalfav" class="form-select form-select-sm">
                        <option value="" selected>(Opcional)</option>
                        <option value="Perro">Perros</option>
                        <option value="Gato">Gatos</option>
                        <option value="Cobayo">Roedores</option>
                        <option value="Ave">Aves</option>
                        <option value="Otro">Otros</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <input type="text" class="form-control form-control-sm" name="descripcion" placeholder="Describete a ti mismo en 150 caracteres (opcional)">
                
            
        <button type="submit" class="btn btn-sm">Registrar</button>
        </td>
        </tr>
        </table>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('contraseña');
        const eyeIcon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.replace('bi-eye-slash', 'bi-eye');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.replace('bi-eye', 'bi-eye-slash');
        }
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        const confirmPasswordField = document.getElementById('confirmar_contraseña');
        const eyeIcon = this.querySelector('i');
        if (confirmPasswordField.type === 'password') {
            confirmPasswordField.type = 'text';
            eyeIcon.classList.replace('bi-eye-slash', 'bi-eye');
        } else {
            confirmPasswordField.type = 'password';
            eyeIcon.classList.replace('bi-eye', 'bi-eye-slash');
        }
    });

    document.getElementById('registroForm').addEventListener('submit', function(event) {
        var contraseña = document.getElementById('contraseña').value;
        var confirmarContraseña = document.getElementById('confirmar_contraseña').value;
        var sexo = document.getElementById('sexo').value;

        if (contraseña !== confirmarContraseña) {
            alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.');
            event.preventDefault();
        }

        if (sexo === "") {
            alert('Por favor, seleccione una opción válida para Sexo.');
            event.preventDefault();
        }
    });
</script>
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

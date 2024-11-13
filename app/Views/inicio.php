<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - GAMESTATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> <!-- Enlace al estilo principal -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome para el icono de ojo -->
    <style>
        /* Estilos personalizados */
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #121212;
            font-family: 'Press Start 2P', sans-serif;
            color: #39FF14;
        }

        .container {
            background-color: #1c1c1c;
            max-width: 400px; 
            padding: 30px; 
            border-radius: 20px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8); 
            color: #f1f1f1;
        }

        h2 {
            color: #39FF14;
            font-weight: bold; 
            text-align: center;
        }

        .form-label {
            color: #f1f1f1;
        }

        .form-control {
            background-color: #333;
            color: #39FF14;
            border: none;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #39FF14;
        }

        .btn-primary {
            background-color: #39FF14;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2ecc71;
        }

        .text-center a {
            color: #39FF14;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #39FF14;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container p-4 shadow rounded-4">
        <h2>Iniciar Sesión</h2>

        <!-- Mostrar mensaje de error solo si 'error' está presente en la sesión -->
        <?php if (session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <!-- Formulario de inicio de sesión -->
        <form action="<?= site_url('/login') ?>" method="POST">
            <div class="mb-3">
                <label for="nombre_usuario" class="form-label">Usuario</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" required>
            </div>
                
            <div class="mb-3 position-relative">  
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" class="form-control" required>
                <i class="fas fa-eye eye-icon" id="togglePassword"></i>
            </div>   
                
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>        
                
            <p class="text-center mt-3">¿No tienes una cuenta? <a href="<?= site_url('registro_usuario') ?>">Regístrate aquí</a></p>
            <p class="text-center"><a href="<?= site_url('recuperarcontra/index') ?>">¿Olvidaste tu contraseña?</a></p>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Función para alternar la visibilidad de la contraseña
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('contraseña');

        togglePassword.addEventListener('click', function () {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

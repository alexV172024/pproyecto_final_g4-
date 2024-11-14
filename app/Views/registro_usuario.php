<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - GAMESTATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            background-color: #121212;
            color: #39FF14;
            font-family: 'Press Start 2P', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background-color: #1c1c1c;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
        }

        h2 {
            color: #39FF14;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            color: #e0e0e0;
            text-align: center;
        }

        .form-label {
            color: #e0e0e0;
        }

        .form-control, .form-select {
            background-color: #333;
            color: #39FF14;
            border: 2px solid #39FF14;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: none;
            border-color: #2ecc71;
        }

        .btn-primary {
            background-color: #39FF14;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2ecc71;
        }

        .form-check-label, .text-center a {
            color: #e0e0e0;
        }

        .text-center a:hover {
            color: #2ecc71;
        }

        .btn-custom {
            background-color: #39FF14;
            border: none;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>REGISTRA TUS DATOS EN GAMESTATION</h2>
        <p>Completa el siguiente formulario para solicitar una cuenta. La información que proporcionas está sujeta a nuestra <a href="">Política de Privacidad</a>.</p>
        
        <form action="procesar_recuperacion.php" method="post">
            <div class="mb-3 text-start">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="mb-3 text-start">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" required>
            </div>
            <div class="mb-3 text-start">
                <label for="contacto" class="form-label">Contacto:</label>
                <input type="text" class="form-control" name="contacto" id="contacto" required>
            </div>
            
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-custom">Enviar</button>
            </div>
            
            <div class="text-center mt-3">
                <a href="javascript:window.history.back();" class="navbar-brand fw-semibold">Volver al Inicio de Sesion</a> 
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
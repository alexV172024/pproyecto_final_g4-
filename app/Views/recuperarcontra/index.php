<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Tienda de Videojuegos</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        body {
            font-family: 'Press Start 2P', sans-serif;
            color: #f1f1f1;
            background-color: #121212;
            margin: 0;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand a {
            color: #39FF14 !important;
            font-size: 1.2rem;
            text-align: center;
            width: 100%;
            text-decoration: none;
        }
        .navbar-brand a:hover {
            color: #007bff !important;
        }
        .container {
            padding-top: 50px;
            max-width: 500px;
        }   
        .content-wrapper {
            text-align: center;
            color: #f1f1f1;
        }
        .form-label, .form-control {
            color: #f1f1f1;
            background-color: #2d2d2d;
            border: none;
            border-radius: 5px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #39FF14;
        }
        .btn-custom {
            background-color: #39FF14;
            color: #000;
            font-size: 1rem;
            border-radius: 5px;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-brand">
            <a href="login.php">GAMESTATION</a>
        </span>
    </nav>
    <div class="container content-wrapper">
        <h2>Recuperar Contraseña</h2>
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
            <button type="submit" class="btn btn-custom">Enviar</button>
        </form>
    </div>
</body>
</html>
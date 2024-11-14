<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - GAMESTATION</title>
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
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 500px;
            background-color: #1c1c1c;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
        }

        h2 {
            color: #39FF14;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #e0e0e0;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            color: #e0e0e0;
            font-weight: bold;
        }

        .form-control {
            background-color: #333;
            color: #39FF14;
            border: 2px solid #39FF14;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #2ecc71;
        }

        .btn-primary {
            background-color: #39FF14;
            border: none;
            font-weight: bold;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #2ecc71;
        }

        .text-center a {
            color: #e0e0e0;
            text-decoration: none;
        }

        .text-center a:hover {
            color: #2ecc71;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>
        <form action="<?= base_url('recuperarcontra/procesarRecuperacion'); ?>" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php if (session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-info mt-3">
                <?= session()->getFlashdata('mensaje') ?>
            </div>
        <?php endif; ?>

        <div class="text-center mt-3">
            <a href="javascript:window.history.back();" class="navbar-brand fw-semibold">Volver al inicio de sesión</a> 
        </div>
    </div>
</body>
</html>
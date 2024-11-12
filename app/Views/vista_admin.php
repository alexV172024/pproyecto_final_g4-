<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Administrador</title>
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

        .navbar-brand {
            color: #39FF14 !important;
            font-size: 1.2rem;
            text-align: center;
            width: 100%;
        }

        .container-fluid {
            padding-top: 20px;
        }

        .content-wrapper {
            text-align: center;
        }

        .btn-custom {
            margin: 10px;
            background-color: #39FF14;
            color: #000;
            font-size: 1rem;
        }

        .btn-custom:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Vista Administrador</span>
        </div>
    </nav>

    <div class="container-fluid content-wrapper">
        <h1>Bienvenido a la Vista Administrador</h1>
        <p>Selecciona una de las opciones del menú para navegar a las diferentes secciones.</p>
        
        <div>
            <button class="btn btn-custom" onclick="location.href='usuarios.html'">Usuarios</button>
            <button class="btn btn-custom" onclick="location.href='ventas.html'">Ventas</button>
            <button class="btn btn-custom" onclick="location.href='detalle_ventas.html'">Detalle Ventas</button>
            <button class="btn btn-custom" onclick="location.href='proveedores.html'">Proveedores</button>
            <button class="btn btn-custom" onclick="location.href='inventario.html'">Inventario</button>
            <button class="btn btn-custom" onclick="location.href='clientes.html'">Clientes</button>
            <button class="btn btn-custom" onclick="location.href='accesorios.html'">Accesorios</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-VoPFK6ITbS3zjtE2QT75oZHZK7BJQvXYrY9AnNplR+ZepfK9zu6FA8Z4LR7HJ1gh" crossorigin="anonymous"></script>
</body>
</html>
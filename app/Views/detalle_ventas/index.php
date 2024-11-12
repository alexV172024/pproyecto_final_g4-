<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ventas</title>
</head>
<body>
    <h2>Listado de Detalles de Ventas</h2>
    <a href="<?= site_url('detalle_ventas/create') ?>">Crear nuevo detalle de venta</a>
    <ul>
        <?php foreach ($detalle_ventas as $detalle): ?>
            <li>
                Detalle Venta ID: <?= $detalle['detalle_id']; ?> - 
                Venta ID: <?= $detalle['venta_id']; ?> - 
                Videojuego ID: <?= $detalle['videojuego_id']; ?> - 
                Cantidad: <?= $detalle['cantidad']; ?> - 
                Precio Unitario: <?= $detalle['precio_unitario']; ?> - 
                Total: <?= $detalle['total']; ?> - 
                <a href="<?= site_url('detalle_ventas/edit/' . $detalle['detalle_id']); ?>">Editar</a> - 
                <a href="<?= site_url('detalle_ventas/delete/' . $detalle['detalle_id']); ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

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
    <link rel="stylesheet" href="css/style.css"> <!-- Enlace a tu archivo CSS separado -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap'); /* Fuente retro */

        body {
            font-family: 'Press Start 2P', sans-serif;
            color: #f1f1f1; /* Color de texto claro */
            background-color: #121212; /* Fondo oscuro */
            margin: 0; /* Eliminar márgenes predeterminados */
        }

        .banner {
            height: 200px; /* Altura del banner */
            background-color: #45a29e; /* Color de fondo del banner */
            display: flex; /* Para centrar el texto */
            align-items: center; /* Centrando verticalmente */
            justify-content: center; /* Centrando horizontalmente */
        }

        .offcanvas {
            background-color: #000; /* Color de fondo negro para el menú offcanvas */
        }

        .offcanvas-header {
            background-color: #0b0c10; /* Fondo oscuro para el encabezado del offcanvas */
        }

        .offcanvas-body {
            background-color: #000; /* Color de fondo negro para el cuerpo del offcanvas */
        }

        .offcanvas-title {
            font-size: 1rem; /* Tamaño de fuente más pequeño para el título del offcanvas */
            color: #39FF14; /* Color verde neón para GAMESTATION en el offcanvas */
        }

        .navbar-brand {
            font-size: 0.9rem; /* Reducir tamaño de fuente al 90% */
            color: #39FF14; /* Color verde neón */
        }

        .nav-link {
            color: #f1f1f1; /* Color de texto claro para los enlaces */
        }

        .nav-link:hover {
            color: #007bff; /* Color azul al pasar el cursor */
        }

        .container {
            padding-top: 20px; 
        }
    </style>
</html>
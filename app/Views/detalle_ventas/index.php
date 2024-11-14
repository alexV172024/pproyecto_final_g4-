<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap'); /* Fuente retro */

        body {
            font-family: 'Press Start 2P', sans-serif;
            color: #f1f1f1;
            background-color: #121212;
            margin: 0;
        }

        .banner {
            height: 200px;
            background-color: #45a29e;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .offcanvas {
            background-color: #000;
        }

        .offcanvas-header {
            background-color: #0b0c10;
        }

        .offcanvas-body {
            background-color: #000;
        }

        .offcanvas-title {
            font-size: 1rem;
            color: #39FF14;
        }

        .navbar-brand {
            font-size: 1rem;
            color: #39FF14;
        }

        .nav-link {
            color: #f1f1f1;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .container {
            padding-top: 20px;
        }

        .table {
            color: #f1f1f1;
        }

        .navbar {
            background-color: #0b0c10;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación con el enlace para regresar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="javascript:window.history.back();" class="navbar-brand fw-semibold">Volver al Inicio de Sesion</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Listado de Detalles de Ventas</h2>

        <!-- Botón para crear nuevo detalle de venta -->
        <a href="<?= site_url('detalle_ventas/create') ?>" class="btn btn-primary mb-3">Crear nuevo detalle de venta</a>

        <!-- Tabla de detalles de ventas -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Detalle Venta ID</th>
                    <th>Venta ID</th>
                    <th>Videojuego ID</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalle_ventas as $detalle): ?>
                    <tr>
                        <td><?= $detalle['detalle_id']; ?></td>
                        <td><?= $detalle['venta_id']; ?></td>
                        <td><?= $detalle['videojuego_id']; ?></td>
                        <td><?= $detalle['cantidad']; ?></td>
                        <td><?= $detalle['precio_unitario']; ?></td>
                        <td><?= $detalle['total']; ?></td>
                        <td>
                            <!-- Botón para editar -->
                            <a href="<?= site_url('detalle_ventas/edit/' . $detalle['detalle_id']); ?>" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Botón para eliminar -->
                            <a href="<?= site_url('detalle_ventas/delete/' . $detalle['detalle_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este detalle de venta?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
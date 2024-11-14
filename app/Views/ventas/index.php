<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .navbar {
            background-color: #0b0c10;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="javascript:window.history.back();" class="navbar-brand fw-semibold">Volver al Inicio de Sesion</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Listado de Ventas</h2>

        <a href="<?= site_url('ventas/create') ?>" class="btn btn-primary mb-3">Crear nueva venta</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Venta ID</th>
                    <th>Videojuego ID</th>
                    <th>Fecha de Venta</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                    <tr>
                        <td><?= $venta['venta_id']; ?></td>
                        <td><?= $venta['videojuego_id']; ?></td>
                        <td><?= $venta['fecha_venta']; ?></td>
                        <td><?= $venta['cantidad']; ?></td>
                        <td>
                            <a href="<?= site_url('ventas/edit/' . $venta['venta_id']); ?>" class="btn btn-warning btn-sm">Editar</a>

                            <a href="<?= site_url('ventas/delete/' . $venta['venta_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta venta?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
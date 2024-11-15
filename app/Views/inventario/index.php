<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #343a40 !important;
            color: white !important;
            font-weight: bold;
        }

        td {
            background-color: #f8f9fa;
            color: #495057;
        }

        td a {
            color: #ffffff;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        @media (max-width: 768px) {
            table {
                font-size: 0.8rem;
            }

            td, th {
                padding: 6px;
            }

            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
<a href="<?= base_url('/admin'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a>     
<h1>Listado de Inventario</h1>
    
    <!-- Botón para agregar un nuevo registro al inventario -->
    <!--<a href="<?= site_url('inventario/nuevo'); ?>" class="btn btn-primary">Nuevo Inventario</a>-->
    
    <table border="1">
        <thead>
            <tr>
                <th>ID Inventario</th>
                <th>Accesorio</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Ubicación</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventarios as $item): ?>
            <tr>
                <td><?= $item['inventario_id']; ?></td>
                <td><?= $item['accesorio_id']; ?></td>
                <td><?= $item['cantidad']; ?></td>
                <td><?= $item['precio']; ?></td>
                <td><?= $item['ubicacion']; ?></td>
                <td><?= $item['fecha_ingreso']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

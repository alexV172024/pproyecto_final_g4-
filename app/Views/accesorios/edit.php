<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Accesorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            padding: 30px 0;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Editar Accesorio</h1>
    <form action="<?= site_url('accesorios/update/' . $accesorio['accesorio_id']); ?>" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?= esc($accesorio['nombre']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input type="text" name="marca" class="form-control" value="<?= esc($accesorio['marca']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <input type="text" name="modelo" class="form-control" value="<?= esc($accesorio['modelo']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" name="precio" class="form-control" step="0.01" value="<?= esc($accesorio['precio']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="proveedor_id" class="form-label">Proveedor:</label>
            <input type="number" name="proveedor_id" class="form-control" value="<?= esc($accesorio['proveedor_id']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" name="stock" class="form-control" value="<?= esc($accesorio['stock']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?= site_url('accesorios'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Videojuego</title>
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

        h2 {
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
    <h2>Nuevo Videojuego</h2>
    <form action="<?= site_url('videojuegos/store') ?>" method="post">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="plataforma" class="form-label">Plataforma:</label>
            <input type="text" name="plataforma" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género:</label>
            <input type="text" name="genero" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="proveedor_id" class="form-label">Proveedor ID:</label>
            <input type="number" name="proveedor_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?= site_url('videojuegos'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Detalle de Venta</title>
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
    <h2>Editar Detalle de Inventario</h2>
    <form action="<?= site_url('inventario/update/' . $inventario['inventario_id']); ?>" method="post">
    <div class="form-group">
        <label for="accesorio_id">Accesorio</label>
        <input type="text" class="form-control" id="accesorio_id" name="accesorio_id" value="<?= esc($inventario['accesorio_id']); ?>" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?= esc($inventario['cantidad']); ?>" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="<?= esc($inventario['precio']); ?>" step="0.01" required>
    </div>
    <div class="form-group">
        <label for="ubicacion">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?= esc($inventario['ubicacion']); ?>" required>
    </div>
    <div class="form-group">
        <label for="fecha_ingreso">Fecha de Ingreso</label>
        <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?= esc($inventario['fecha_ingreso'] ?? ''); ?>" required>

    </div>
    <div class="d-flex justify-content-between">
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    <a href="<?= site_url('inventario'); ?>" class="btn btn-secondary">Cancelar</a>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

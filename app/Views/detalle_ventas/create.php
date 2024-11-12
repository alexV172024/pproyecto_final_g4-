<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta Detalle</title>
</head>
<body>
    <h2>Crear Nuevo Detalle de Venta</h2>
    <form action="<?= site_url('detalle_ventas/store') ?>" method="post">
        <label for="venta_id">Venta ID:</label>
        <input type="number" name="venta_id" required><br>

        <label for="videojuego_id">Videojuego ID:</label>
        <input type="number" name="videojuego_id" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

        <label for="precio_unitario">Precio Unitario:</label>
        <input type="number" name="precio_unitario" step="0.01" required><br>
        
        <label for="total">Total:</label>
        <input type="number" name="total" step="0.01" required><br>

        <button type="submit">Guardar Detalle</button>
    </form>
</body>
</html>
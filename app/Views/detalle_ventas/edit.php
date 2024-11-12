<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Detalle de Venta</title>
</head>
<body>
    <h2>Editar Detalle de Venta</h2>

    <form action="<?= site_url('detalle_ventas/update/' . $detalle_venta['detalle_id']) ?>" method="post">
        <label for="venta_id">Venta ID:</label>
        <input type="number" name="venta_id" value="<?= esc($detalle_venta['venta_id']) ?>" required><br>

        <label for="videojuego_id">Videojuego ID:</label>
        <input type="number" name="videojuego_id" value="<?= esc($detalle_venta['videojuego_id']) ?>" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?= esc($detalle_venta['cantidad']) ?>" required><br>

        <label for="precio_unitario">Precio Unitario:</label>
        <input type="number" name="precio_unitario" value="<?= esc($detalle_venta['precio_unitario']) ?>" step="0.01" required><br>

        <label for="total">Total:</label>
        <input type="number" name="total" value="<?= esc($detalle_venta['total']) ?>" step="0.01" required><br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
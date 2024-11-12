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

        <label for="producto_id">Producto ID:</label>
        <input type="number" name="producto_id" value="<?= esc($detalle_venta['producto_id']) ?>" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?= esc($detalle_venta['cantidad']) ?>" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="<?= esc($detalle_venta['precio']) ?>" step="0.01" required><br>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
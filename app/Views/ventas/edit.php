<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ventas</title>
</head>
<body>
<h2>Editar Venta</h2>

<form action="<?= site_url('ventas/update/' . $venta['venta_id']) ?>" method="post">
    <label for="cliente_id">Cliente ID:</label>
    <input type="text" name="cliente_id" value="<?= esc($venta['cliente_id']) ?>" required><br>

    <label for="videojuego_id">Videojuego ID:</label>
    <input type="text" name="videojuego_id" value="<?= esc($venta['videojuego_id']) ?>" required><br>

    <label for="fecha_venta">Fecha de Venta:</label>
    <input type="date" name="fecha_venta" value="<?= esc($venta['fecha_venta']) ?>" required><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" value="<?= esc($venta['cantidad']) ?>" required><br>

    <label for="usuario_id">Usuario ID:</label>
    <input type="text" name="usuario_id" value="<?= esc($venta['usuario_id']) ?>" required><br>

    <button type="submit">Guardar cambios</button>
</form>
</body>
</html>
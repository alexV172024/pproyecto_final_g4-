<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta</title>
</head>
<body>

<h2>Añadir Nueva Venta</h2>
<form action="<?= site_url('ventas/store') ?>" method="post">
    <label for="venta_id">ID de Venta:</label>
    <input type="number" name="venta_id" required><br>
    <label for="cliente_id">ID del Cliente:</label>
    <input type="number" name="cliente_id" required><br>
    <label for="videojuego_id">ID del Videojuego:</label>
    <input type="number" name="videojuego_id" required><br>
    <label for="fecha_venta">Fecha de Venta:</label>
    <input type="date" name="fecha_venta" required><br>
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" required><br>
    <label for="usuario_id">ID del Usuario:</label>
    <input type="number" name="usuario_id" required><br>

    <button type="submit">Guardar Venta</button>
</form>
</body>
</html>
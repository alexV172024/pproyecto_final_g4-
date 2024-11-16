<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Accesorio</title>
</head>
<body>
    <h1>Crear Nuevo Accesorio</h1>
    <form action="<?= site_url('accesorios/store') ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label for="proveedor_id">Proveedor:</label>
        <input type="number" name="proveedor_id" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>

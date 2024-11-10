<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Accesorio</title>
</head>
<body>
    <h1>Editar Accesorio</h1>
    <form action="<?= site_url('accesorios/update/' . $accesorio['accesorio_id']); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= $accesorio['nombre']; ?>" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="<?= $accesorio['marca']; ?>" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="<?= $accesorio['modelo']; ?>" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" value="<?= $accesorio['precio']; ?>" required><br>

        <label for="proveedor_id">Proveedor:</label>
        <input type="number" name="proveedor_id" value="<?= $accesorio['proveedor_id']; ?>" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="<?= $accesorio['stock']; ?>" required><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

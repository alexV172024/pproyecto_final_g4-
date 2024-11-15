<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Accesorios</title>
</head>
<body>
<a href="<?= base_url('/admin'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a> 
    <h1>Listado de Accesorios</h1>
    <a href="<?= site_url('accesorios/create') ?>">Crear Nuevo Accesorio</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accesorios as $accesorio): ?>
            <tr>
                <td><?= $accesorio['accesorio_id']; ?></td>
                <td><?= $accesorio['nombre']; ?></td>
                <td><?= $accesorio['marca']; ?></td>
                <td><?= $accesorio['modelo']; ?></td>
                <td><?= $accesorio['precio']; ?></td>
                <td><?= $accesorio['proveedor_id']; ?></td>
                <td><?= $accesorio['stock']; ?></td>
                <td>
                <a href="<?= site_url('accesorios/edit/' . $accesorio['accesorio_id']); ?>">Editar</a>
                <a href="<?= site_url('accesorios/delete/' . $accesorio['accesorio_id']); ?>" onclick="return confirm('¿Seguro que deseas eliminar este accesorio?');">Eliminar</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
</head>
<body>
<h2>Listado de Proveedores</h2>
<a href="<?= site_url('proveedores/create') ?>">Crear nuevo proveedor</a>
<ul>
    <?php foreach ($proveedores as $proveedor): ?>
        <li>
            <?= $proveedor['nombre']; ?> - 
            <a href="<?= site_url('proveedores/edit/' . $proveedor['proveedor_id']); ?>">Editar</a> - 
            <a href="<?= site_url('proveedores/delete/' . $proveedor['proveedor_id']); ?>">Eliminar</a>

        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
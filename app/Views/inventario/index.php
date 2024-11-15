<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
</head>
<body>
<a href="<?= base_url('/admin'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a>     
<h1>Listado de Inventario</h1>
    
    <!-- Botón para agregar un nuevo registro al inventario -->
    <!--<a href="<?= site_url('inventario/nuevo'); ?>" class="btn btn-primary">Nuevo Inventario</a>-->
    
    <table border="1">
        <thead>
            <tr>
                <th>ID Inventario</th>
                <th>Accesorio</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Ubicación</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventarios as $item): ?>
            <tr>
                <td><?= $item['inventario_id']; ?></td>
                <td><?= $item['accesorio_id']; ?></td>
                <td><?= $item['cantidad']; ?></td>
                <td><?= $item['precio']; ?></td>
                <td><?= $item['ubicacion']; ?></td>
                <td><?= $item['fecha_ingreso']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

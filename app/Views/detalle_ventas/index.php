<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ventas</title>
</head>
<body>
    <h2>Listado de Detalles de Ventas</h2>
    <a href="<?= site_url('detalle_ventas/create') ?>">Crear nuevo detalle de venta</a>
    <ul>
        <?php foreach ($detalle_ventas as $detalle): ?>
            <li>
                Detalle Venta ID: <?= $detalle['detalle_id']; ?> - 
                Venta ID: <?= $detalle['venta_id']; ?> - 
                Videojuego ID: <?= $detalle['videojuego_id']; ?> - 
                Cantidad: <?= $detalle['cantidad']; ?> - 
                Precio Unitario: <?= $detalle['precio_unitario']; ?> - 
                Total: <?= $detalle['total']; ?> - 
                <a href="<?= site_url('detalle_ventas/edit/' . $detalle['detalle_id']); ?>">Editar</a> - 
                <a href="<?= site_url('detalle_ventas/delete/' . $detalle['detalle_id']); ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>
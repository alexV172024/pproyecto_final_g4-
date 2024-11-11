<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
    <h2>Listado de Ventas</h2>
    <a href="<?= site_url('ventas/create') ?>">Crear nueva venta</a>
    <ul>
        <?php foreach ($ventas as $venta): ?>
            <li>
                Venta ID: <?= $venta['venta_id']; ?> - 
                Cliente ID: <?= $venta['cliente_id']; ?> - 
                Videojuego ID: <?= $venta['videojuego_id']; ?> - 
                Fecha de Venta: <?= $venta['fecha_venta']; ?> - 
                Cantidad: <?= $venta['cantidad']; ?> - 
                Usuario ID: <?= $venta['usuario_id']; ?> - 
                <a href="<?= site_url('ventas/edit/' . $venta['venta_id']); ?>">Editar</a> - 
                <a href="<?= site_url('ventas/delete/' . $venta['venta_id']); ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
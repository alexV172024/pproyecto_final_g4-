<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>
<body>
<h2>Listado de Videojuegos</h2>
<a href="<?= site_url('videojuegos/create') ?>">Crear nuevo videojuego</a>
<ul>
    <?php foreach ($videojuegos as $videojuego): ?>
        <li>
            <?= $videojuego['titulo']; ?> - 
            <a href="<?= site_url('videojuegos/edit/' . $videojuego['videojuego_id']); ?>">Editar</a> - 
<a href="<?= site_url('videojuegos/delete/' . $videojuego['videojuego_id']); ?>">Eliminar</a>

        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
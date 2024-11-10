<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Videojuego</title>
</head>
<body>
<h2>Editar Videojuego</h2>
<<h2>Editar Videojuego</h2>
<form action="<?= site_url('videojuegos/update/' . $videojuego['videojuego_id']); ?>" method="post">
    <input type="text" name="titulo" value="<?= $videojuego['titulo']; ?>" required>
    <input type="text" name="plataforma" value="<?= $videojuego['plataforma']; ?>" required>
    <input type="text" name="genero" value="<?= $videojuego['genero']; ?>" required>
    <input type="number" name="precio" value="<?= $videojuego['precio']; ?>" required>
    <input type="number" name="cantidad" value="<?= $videojuego['cantidad']; ?>" required>
    <button type="submit">Actualizar Videojuego</button>
</form>


</body>
</html>
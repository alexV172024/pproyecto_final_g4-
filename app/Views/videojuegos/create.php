<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Videojuego</title>
</head>
<body>
<h2>Nuevo Videojuego</h2>
<form action="<?= site_url('videojuegos/store') ?>" method="post">
    Título: <input type="text" name="titulo"><br>
    Plataforma: <input type="text" name="plataforma"><br>
    Género: <input type="text" name="genero"><br>
    Precio: <input type="number" name="precio"><br>
    Cantidad: <input type="number" name="cantidad"><br>
    Proveedor ID: <input type="number" name="proveedor_id"><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
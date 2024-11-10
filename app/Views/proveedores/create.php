<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Proveedor</title>
</head>
<body>
<h2>Nuevo Proveedor</h2>
<form action="<?= site_url('proveedores/store') ?>" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Contacto: <input type="text" name="contacto"><br>
    Productos Suministrados: <input type="text" name="productos_suministrados"><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
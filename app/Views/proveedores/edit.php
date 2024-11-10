<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
</head>
<body>
<h2>Editar Proveedor</h2>
<form action="<?= site_url('/proveedores/update/' . $proveedor['proveedor_id']); ?>" method="post">
    Nombre: <input type="text" name="nombre" value="<?= $proveedor['nombre']; ?>"><br>
    Contacto: <input type="text" name="contacto" value="<?= $proveedor['contacto']; ?>"><br>
    Productos Suministrados: <input type="text" name="productos_suministrados" value="<?= $proveedor['productos_suministrados']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>

</body>
</html>
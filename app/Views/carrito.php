<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GAMESTATION: Carrito de Compras</title>
    <link rel="icon" href="Views/img/element.ico" type="image/x-icon">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <style>
        body {
            font-family: 'Press Start 2P', sans-serif;
            background-color: #121212;
            color: #f1f1f1;
            margin: 0;
        }
        .banner {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0b0c10;
        }
        .carrito-item {
            background-color: #0b0c10;
            border: 1px solid #45a29e;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .carrito-item:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1 class="text-center">Carrito de Compras</h1>

    <?php if (!empty($carrito)): ?>
        <div class="container mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carrito as $item): ?>
                        <tr>
                            
                            <td><?= esc($item['nombre']); ?></td>
                            <td><?= esc($item['marca']); ?></td>
                            <td><?= esc($item['modelo']); ?></td>
                            <td><?= esc($item['precio']); ?> Q</td>
                            <td>
                                <a href="<?= site_url('carrito/eliminar/' . $item['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-center">No hay productos en el carrito.</p>
    <?php endif; ?>

</body>
</html>
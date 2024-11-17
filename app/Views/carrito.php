<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GAMESTATION: Carrito de Compras</title>
    <link rel="icon" href="<?= base_url('img/element.ico'); ?>" type="image/x-icon">
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
        .empty-cart-alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Carrito de Compras</h1>

        <?php if (!empty($carrito)): ?>
            <div class="container mt-4">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Especificaciones de la compra</th>
                            <th></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total = 0; // Variable para acumular el total
                            foreach ($carrito as $item): 
                                $total += $item['precio']; // Sumar el precio de cada producto
                        ?>
                            <tr>
                                <td>
                                    <?= esc($item['nombre']); ?>
                                    <?= esc($item['marca']); ?>
                                    <?= esc($item['modelo']); ?>
                                    <?php if (isset($item['titulo'])): ?>
                                         <?= esc($item['titulo']); ?>
                                    <?php endif; ?>
                                    <?php if (isset($item['plataforma'])): ?>
                                        <?= esc($item['plataforma']); ?>
                                    <?php endif; ?>
                                    <?php if (isset($item['genero'])): ?>
                                        <?= esc($item['genero']); ?>
                                    <?php endif; ?>
                                    - Precio: Q <?= number_format(esc($item['precio']), 2); ?> 
                                </td>
                                <td>
                                    <a href="<?= site_url('carrito/eliminar/' . $item['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
                
            </div>

            <!-- Mostrar el total de la compra -->
            <div class="text-center mt-4">
                <h3>Total de la compra: Q <?= number_format($total, 2); ?></h3>
            </div>

            <!-- Botones de acción -->
            <div class="text-center mt-4">
                <!-- Botón de pagar (sin acción) -->
                <button class="btn btn-success">Pagar</button>

                <!-- Botón para borrar todo (sin acción) -->
                <a href="<?= site_url('carrito/borrar_todo'); ?>" class="btn btn-danger ms-2">Borrar Todo</a>

            </div>

        <?php else: ?>
            <div class="alert alert-warning text-center empty-cart-alert" role="alert">
                No hay productos en el carrito.
            </div>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="<?= base_url('/catalogo_accesorios'); ?>" class="btn btn-secondary">Volver al Accesorios</a>
            <a href="<?= base_url('tienda'); ?>" class="btn btn-secondary">Volver al VideoJuegos</a>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/style.css"> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap'); 

        body {
            font-family: 'Press Start 2P', sans-serif;
            color: #f1f1f1; 
            background-color: #121212; 
            margin: 0; 
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px; 
            margin-top: 20px; 
        }

        .category-card {
            background-color: #0b0c10; 
            border: 1px solid #45a29e; 
            border-radius: 5px; 
            padding: 20px;
            text-align: center; 
            transition: transform 0.2s; 
        }

        .category-card:hover {
            transform: scale(1.05); 
        }

        .container {
            padding-top: 50px; 
        }

        p1, h5 {
            color: black;
        }
    </style>
</head>
<body>
<a href="<?= base_url('/menu'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a> 
    <h2 class="text-center">Accesorios Disponibles</h2>
    <div class="container mt-4">
        <div class="row">
            <?php foreach ($productos as $accesorio): ?>
                <div class="col-md-4 mb-3">
                    <div class="category-card">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($accesorio['nombre']); ?></h5>
                            <p class="card-text">Marca: <?= esc($accesorio['marca']); ?></p>
                            <p class="card-text">Modelo: <?= esc($accesorio['modelo']); ?></p>
                            <p class="card-text">Precio: $<?= esc($accesorio['precio']); ?></p>
                            <p class="card-text">Stock: <?= esc($accesorio['stock']); ?></p>
                            <button type="submit" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
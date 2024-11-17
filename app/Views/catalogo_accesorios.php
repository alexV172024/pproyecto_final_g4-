<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GAMESTATION: TIENDA</title>
    <link rel="icon" href="Views/img/element.ico" type="image/x-icon">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/style.css"> 
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
        font-family: 'Press Start 2P', sans-serif;
        color: #f1f1f1; 
        background-color: #121212; 
        margin: 0; 
    }

    .banner {
        height: 200px; 
        background-color: #; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
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

    .offcanvas {
        background-color: #000; 
    }

    .offcanvas-header {
        background-color: #0b0c10; 
    }

    .offcanvas-body {
        background-color: #000; 
    }

    .offcanvas-title {
        font-size: 1rem; 
        color: #39FF14; 
    }

    .navbar-brand {
        font-size: 0.9rem; 
        color: #39FF14; 
    }

    .nav-link {
        color: #f1f1f1; 
    }

    .nav-link:hover {
        color: #007bff; 
    }

    .container {
        padding-top: 50px;
    }

    p1 {
        color: black;
    }

    h5 {
        color: black;
    }


    .card-text {
        color: black; 
    }
</style>

</head>
<body>
    <!-- MENU START  -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="<?= base_url('/menu'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>
            <section class="offcanvas offcanvas-start" id="menuLateral" tabindex="-1">
                <div class="offcanvas-header" data-bs-theme="dark">
                    <h5 class="offcanvas-title">GAMESTATION</h5>
                    <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between px-0">
                    <ul class="navbar-nav fs-5 justify-content-evenly">
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/tienda'); ?>" class="nav-link">Tienda</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/catalogo_accesorios'); ?>" class="nav-link">Catalogo</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/ubicacion'); ?>" class="nav-link">Ubicacion</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/contacto'); ?>" class="nav-link">Contacto</a></li>

                       
                        <?php if(session()->get('nombre_usuario')): ?>
                            <li class="nav-item p-3 py-md-1"><span class="nav-link">Hola, <?= session()->get('nombre_usuario'); ?></span></li>
                        <?php endif; ?>
                        <a href="<?= site_url('/') ?>">Cerrar sesión</a>
                        <li class="nav-item p-3 py-md-1"><a href="carrito.php" class="nav-link"><i class="bi bi-cart-fill"></i><span>Carrito</span></a></li>
                    </ul>
                    <div class="d-lg-none align-self-center py-3">
                     
                        <a href="https://github.com/alexV172024/pproyecto_final_g4-" target="_blank" class="text-info fs-2"><i class="bi bi-github" style="color: #00ff00;"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container mt-4">
        <div class="banner">
            <h1>Catálogo de Accesorios</h1>
        </div>
    </div>

    <!-- Lista de accesorios -->
    <div class="container mt-4">
        <div class="row">
            <?php foreach ($accesorios as $accesorio): ?>
                <div class="col-md-4 mb-3">
                    <div class="card category-card">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($accesorio['nombre']); ?></h5>
                            <p class="card-title">Marca: <?= esc($accesorio['marca']); ?></p>
                            <p class="card-title">Modelo: <?= esc($accesorio['modelo']); ?></p>
                            <p class="card-title">Precio: Q <?= esc($accesorio['precio']); ?></p>
                           
                            <form action="<?= site_url('carrito/agregar'); ?>" method="POST">
                                <?= csrf_field(); ?> 
                                <input type="hidden" name="id" value="<?= esc($accesorio['accesorio_id']); ?>">
                                <input type="hidden" name="nombre" value="<?= esc($accesorio['nombre']); ?>">
                                <input type="hidden" name="marca" value="<?= esc($accesorio['marca']); ?>">
                                <input type="hidden" name="modelo" value="<?= esc($accesorio['modelo']); ?>">
                                <input type="hidden" name="precio" value="<?= esc($accesorio['precio']); ?>">
                                <button type="submit" class="btn btn-primary">Comprar</button>
                            </form>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GAMESTATION: INICIO</title>
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
            background-color: #45a29e; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
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
            padding-top: 20px; 
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
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('tienda'); ?>" class="nav-link">Tienda</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/catalogo_accesorios'); ?>" class="nav-link">Catalogo</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/contacto'); ?>" class="nav-link">Contacto</a></li>
                        
            
                        <?php if(session()->get('nombre_usuario')): ?>
                            <li class="nav-item p-3 py-md-1"><span class="nav-link">Hola, <?= session()->get('nombre_usuario'); ?></span></li>
                        <?php endif; ?>
                        <a href="<?= site_url('/') ?>">Cerrar sesión</a>

                        <li class="nav-item p-3 py-md-1"><a href="carrito" class="nav-link"><i class="bi bi-cart-fill"></i><span>Carrito</span></a></li>
                    </ul>
                    <div class="d-lg-none align-self-center py-3">
                        <a href="carrito" class="text-info fs-2"><i class="bi bi-cart-fill" style="color: #00ff00;"></i></a>
                        <a href="https://github.com/alexV172024/pproyecto_final_g4-" target="_blank" class="text-info fs-2"><i class="bi bi-github" style="color: #00ff00;"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </nav>

    <!-- Botones y buscador -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
            <a href="<?= base_url('/novedades'); ?>" class="btn btn-primary me-2">Novedades</a>
            <a href="<?= base_url('/ofertas'); ?>" class="btn btn-primary me-2">Ofertas</a>
            <a href="<?= base_url('/creditos'); ?>" class="btn btn-primary me-2">Creditos</a>
            </div> 
            <div class="col-md-6 d-flex justify-content-end">
                <input type="text" class="form-control w-50" placeholder="Buscar juego...">
            </div>
        </div>
    </div>

    <!-- Espacio para banner -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <h2 class="text-center text-light">Banner Espacio</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Reseña y video -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h3>Quiénes somos</h3><br>
                <h4>Nuestra Historia</h4><br>
                <p>nuestra tienda comenzó con la misión de ofrecer productos de alta calidad y 
                   un excelente servicio al cliente. A lo largo de los años, nos hemos expandido 
                   para ofrecer una amplia variedad de productos, manteniendo siempre un enfoque 
                   en la satisfacción de nuestros clientes. Desde nuestros primeros días, nos hemos 
                   por brindar una experiencia de compra única, en nuestra tienda en línea.</p> <br><br>
                <h4>Lo que ofrecemos</h4> <br>  
                <p>En nuestra tienda, encontrarás una amplia gama de productos que van desde videojuegos, 
                   controles, consolas. Nos especializamos en toda clase de videojuegos y trabajamos con 
                   los mejores proveedores para asegurar que nuestros clientes reciban productos de la más 
                   alta calidad. Además, ofrecemos un servicio de atención al cliente personalizado para 
                   resolver cualquier duda o necesidad.</p>         
            </div>
            <div class="col-md-6">
                <h3>Video</h3>
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WN9sshzENbA?si=t4SWkShv7ieHyPqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

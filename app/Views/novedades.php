<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades de Juegos</title>
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
    <link rel="stylesheet" href="css/style.css"> <!-- Enlace a tu archivo CSS separado -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap'); /* Fuente retro */

        body {
            font-family: 'Press Start 2P', sans-serif;
            color: #f1f1f1; /* Color de texto claro */
            background-color: #121212; /* Fondo oscuro */
            margin: 0; /* Eliminar márgenes predeterminados */
        }

        .banner {
            height: 200px; /* Altura del banner */
            background-color: #45a29e; /* Color de fondo del banner */
            display: flex; /* Para centrar el texto */
            align-items: center; /* Centrando verticalmente */
            justify-content: center; /* Centrando horizontalmente */
        }

        .offcanvas {
            background-color: #000; /* Color de fondo negro para el menú offcanvas */
        }

        .offcanvas-header {
            background-color: #0b0c10; /* Fondo oscuro para el encabezado del offcanvas */
        }

        .offcanvas-body {
            background-color: #000; /* Color de fondo negro para el cuerpo del offcanvas */
        }

        .offcanvas-title {
            font-size: 1rem; /* Tamaño de fuente más pequeño para el título del offcanvas */
            color: #39FF14; /* Color verde neón para GAMESTATION en el offcanvas */
        }

        .navbar-brand {
            font-size: 0.9rem; /* Reducir tamaño de fuente al 90% */
            color: #39FF14; /* Color verde neón */
        }

        .nav-link {
            color: #f1f1f1; /* Color de texto claro para los enlaces */
        }

        .nav-link:hover {
            color: #007bff; /* Color azul al pasar el cursor */
        }

        .container {
            padding-top: 20px; 
        }

        p1 {
    color: black;
        }

        h5 {
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
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/menu'); ?>" class="nav-link">Inicio</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/tienda'); ?>" class="nav-link">Tienda</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/catalogo_accesorios'); ?>" class="nav-link">Catalogo</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/ubicacion'); ?>" class="nav-link">Ubicacion</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/contacto'); ?>" class="nav-link">Contacto</a></li>

                        <!-- Reemplazar "Iniciar Sesión" por el nombre del usuario -->
                        <?php if(session()->get('nombre_usuario')): ?>
                            <li class="nav-item p-3 py-md-1"><span class="nav-link">Hola, <?= session()->get('nombre_usuario'); ?></span></li>
                        <?php endif; ?>
                        <a href="<?= site_url('/') ?>">Cerrar sesión</a>
                        <li class="nav-item p-3 py-md-1"><a href="carrito.php" class="nav-link"><i class="bi bi-cart-fill"></i><span>Carrito</span></a></li>
                    </ul>
                    <div class="d-lg-none align-self-center py-3">
                        <a href="carrito.php" class="text-info fs-2"><i class="bi bi-cart-fill" style="color: #00ff00;"></i></a>
                        <a href="https://github.com" target="_blank" class="text-info fs-2"><i class="bi bi-github" style="color: #00ff00;"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </nav>

    <!-- Botones y buscador -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <button class="btn btn-primary me-2">Novedades</button>
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
    <div class="container mt-5">
        <h1 class="text-center">Novedades de Juegos</h1>
        <p class="text-center">Aquí encontrarás los últimos videos sobre novedades de los juegos más populares.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="410" height="315" src="https://www.youtube.com/embed/mfnc4_LCPNg?si=PahFU5MyQfVLV4CP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><p1>Marvel's Wolverine para PS5 | 4K </p></h5>
                        <p1 class="card-text">Marvel’s Wolverine está en desarrollo por Insomniac Games para PlayStation 5. Creado en colaboración con Marvel Games y PlayStation.</p>
                    </div>
                    
                </div>
            </div><br>
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/RoE5DCsCzf4?si=ztTcPp3cgPNo5nh7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><p1>Marvel's Spider-Man 2</p></h5>
                        <p1 class="card-text">Los cazadores de Kraven persiguen al Dr. Curt Connors, también conocido como Lagarto, y Spider-Men, Peter Parker y Miles Morales, necesitan detenerlos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/NA6CAgv6p6g?si=P5RrLVWEzSrWoEGq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
                    <div class="card-body">
                    <h5 class="card-title"><p1>Wii U - Mario Kart 8</p></h5>
                    <p1 class="card-text">Mario Kart 8 para Wii U es un juego de carreras lleno de emoción, donde los personajes de Nintendo compiten en pistas llenas de obstáculos y antigravedad. Con gráficos HD y modos en línea, ofrece diversión para todos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

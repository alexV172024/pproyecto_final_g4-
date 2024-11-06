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

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px; /* Espaciado entre categorías */
            margin-top: 20px; /* Espaciado superior */
        }

        .category-card {
            background-color: #0b0c10; /* Fondo oscuro para las tarjetas */
            border: 1px solid #45a29e; /* Borde color verde */
            border-radius: 5px; /* Bordes redondeados */
            padding: 20px;
            text-align: center; /* Centrar texto */
            transition: transform 0.2s; /* Transición suave para hover */
        }

        .category-card:hover {
            transform: scale(1.05); /* Efecto de zoom al pasar el cursor */
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
            padding-top: 20px; /* Espaciado superior para el contenedor */
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
                    <li class="nav-item p-3 py-md-1"><a href="tienda" class="nav-link">Tienda</a></li> <!-- Enlace a la tienda -->
                        <li class="nav-item p-3 py-md-1"><a href="ubicacion" class="nav-link">Ubicacion</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="" class="nav-link">Contacto</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="carrito.php" class="nav-link"><i class="bi bi-cart-fill"></i><span>Carrito</span></a></li>
                    </ul>
                    <div class="d-lg-none align-self-center py-3">
                        <a href="login.php" class="text-info fs-2"><i class="bi bi-person-fill" style="color: #00ff00;"></i></a>
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
                <button class="btn btn-success">Ofertas</button>
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
                    <h2 class="text-center text-light">Bienvenido a nuestra Tienda</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Videojuegos por categorías -->
    <div class="container mt-4">
        <h3 class="text-center">Videojuegos por Categorías</h3>
        <div class="categories">
            <div class="category-card">
                <h4>Aventura</h4>
                <img src="Views/img/adventure-game.png" alt="Aventura" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Acción</h4>
                <img src="Views/img/action-game.png" alt="Acción" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Deportes</h4>
                <img src="Views/img/sports-game.png" alt="Deportes" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Simulación</h4>
                <img src="Views/img/simulation-game.png" alt="Simulación" class="img-fluid" />
            </div>
            <!-- Añade más categorías según sea necesario -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

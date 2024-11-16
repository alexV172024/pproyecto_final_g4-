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
        background-color: #; /* Color de fondo del banner */
        display: flex; /* Para centrar el texto */
        align-items: center; /* Centrando verticalmente */
        justify-content: center; /* Centrando horizontalmente */
    }

    .categories {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
        padding-top: 50px; /* Espaciado superior para el contenedor */
    }

    p1 {
        color: black;
    }

    h5 {
        color: black;
    }


    .card-text {
        color: black; /* Cambiar el color del texto a negro */
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
                    <img src="https://www.shutterstock.com/image-vector/games-time-neon-text-gamepad-260nw-2288041501.jpg" alt="Acción" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
 
     <!-- Videojuegos por categorías -->
     <div class="container mt-4">
        <!--<h3 class="text-center">Videojuegos por Categorías</h3>--> 
        <div class="categories">
            <div class="category-card">
                <h4>Acción</h4>
                <img src="https://img.asmedia.epimg.net/resizer/v2/UPZJI2WP7RGUDE5OKQ73FV2RX4.jpg?auth=6d8f041995078194f7433ccdbf9732f762ae5f6801f36380ec5604d99aac6bc9&width=360&height=203&smart=true" alt="Acción" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Aventura</h4>
                <img src="https://d2m1kqghccc19k.cloudfront.net/wp-content/uploads/2017/11/07010140/MARIO.jpg" alt="Aventura" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Deportes</h4>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHMl5qi37xXq0qSkV7y2j080u7ryvjIU0Z8Q&s" alt="Deportes" class="img-fluid" />
            </div>
            <div class="category-card">
                <h4>Simulación</h4>
                <img src="https://cdn.dlcompare.com/others_jpg/upload/news/image/life-by-you-entra-en-early-access-image-15bbd59b.jpg.webp" alt="Simulación" class="img-fluid" />
            </div>
     
        </div>
    </div><br><br>
    

    <!-- Productos disponibles -->
    <h2 class="text-center">Videojuegos Disponibles</h2>
    <div class="container mt-4">
        <div class="row">
            <?php foreach ($juegos as $juego): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-text"><?= esc($juego['titulo']); ?></h5>
                            <p class="card-text">Género: <?= esc($juego['genero']); ?></p>
                            <p class="card-text">Plataforma: <?= esc($juego['plataforma']); ?></p>
                            <p class="card-text">Precio: Q <?= esc($juego['precio']); ?></p>
 
                             <!-- Formulario para agregar al carrito -->
                             <form action="<?= site_url('carrito/agregar'); ?>" method="POST">
                                <?= csrf_field(); ?>  <!-- Protección CSRF -->
                                    <input type="hidden" name="tipo" value="videojuego">
                                    <input type="hidden" name="id" value="<?= esc($juego['videojuego_id']); ?>">
                                    <input type="hidden" name="titulo" value="<?= esc($juego['titulo']); ?>">
                                    <input type="hidden" name="genero" value="<?= esc($juego['genero']); ?>">
                                    <input type="hidden" name="plataforma" value="<?= esc($juego['plataforma']); ?>">
                                    <input type="hidden" name="precio" value="<?= esc($juego['precio']); ?>">
                                    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                                </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
 
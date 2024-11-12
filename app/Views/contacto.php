<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contacto - GAMESTATION</title>
    <link rel="icon" href="Views/img/element.ico" type="image/x-icon">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
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
            padding-top: 20px; /* Espaciado superior para el contenedor */
        }
    </style>
</head>
<body>
    <!-- MENU START -->
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
                        <li class="nav-item p-3 py-md-1"><a href="tienda" class="nav-link">Tienda</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="ubicacion" class="nav-link">Ubicación</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="contacto" class="nav-link">Contacto</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="inicio_sesion" class="nav-link"><i class="bi bi-person-fill"></i><span>Iniciar Sesión</span></a></li>
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
    <!-- MENU END -->

    <div class="container mt-4">
        <h1>Contáctanos</h1>
        <p class="lead">Puedes enviarnos un mensaje a nuestro correo o contactarnos por teléfono.</p>

        <!-- Formulario de contacto -->
        <form action="mailto:correoempresa@gmail.com" method="POST" enctype="text/plain">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>

        <!-- Información de contacto -->
        <div class="mt-5">
            <h4>Teléfonos</h4>
            <ul>
                <li>+56 9 1234 5678</li>
                <li>+56 9 8765 4321</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
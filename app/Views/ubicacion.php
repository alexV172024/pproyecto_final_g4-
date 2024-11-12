<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubicación - GAMESTATION</title>
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
                        <li class="nav-item p-3 py-md-1"><a href="tienda" class="nav-link">Tienda</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="ubicacion" class="nav-link">Ubicación</a></li>
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

    <!-- Espacio para banner -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <h2 class="text-center text-light">Ubicación de Nuestros Kioscos</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalles de los kioscos -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <h5>Kiosco 1</h5>
                <p>Detalles del kiosco 1...</p>
            </div>
            <div class="col-md-3">
                <h5>Kiosco 2</h5>
                <p>Detalles del kiosco 2...</p>
            </div>
            <div class="col-md-3">
                <h5>Kiosco 3</h5>
                <p>Detalles del kiosco 3...</p>
            </div>
            <div class="col-md-3">
                <h5>Kiosco 4</h5>
                <p>Detalles del kiosco 4...</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
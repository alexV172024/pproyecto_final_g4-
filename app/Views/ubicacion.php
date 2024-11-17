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
            color: #45a29e;
        }

        .container {
            padding-top: 20px;
        }
        .banner {
        height: 200px;
        background: linear-gradient(135deg, #1d3557, #457b9d, #a8dadc);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .banner h2 {
        font-size: 2rem;
        color: #39FF14; /* Letras verdes */
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .kiosco-card {
        background-color: #fff;
        color: #000;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .kiosco-title {
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .kiosco-title:hover {
        color: #39FF14; 
    }

    .kiosco-card p {
        margin: 0;
    }
    </style>
</head>
<body>
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
                        <li class="nav-item p-3 py-md-1"><a href="<?= base_url('/catalogo_accesorios'); ?>" class="nav-link">Catalogo</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="ubicacion" class="nav-link">Ubicación</a></li>
                        <li class="nav-item p-3 py-md-1"><a href="contacto" class="nav-link">Contacto</a></li>
                        
                        <li class="nav-item p-3 py-md-1"><a href="carrito" class="nav-link"><i class="bi bi-cart-fill"></i><span>Carrito</span></a></li>
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

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="banner">
                <h2 class="text-center">Ubicación de Nuestros Kioscos</h2>
            </div>
        </div>
    </div>
</div>


    <div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 1</h5>
                <p>Avenida Libertad #123, Esquina con Calle Victoria, Zona Centro.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 2</h5>
                <p>Boulevard Los Héroes #56, Frente al Parque Central.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 3</h5>
                <p>Calle del Sol #789, a un costado de la Plaza Comercial El Sol.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 4</h5>
                <p>Avenida Las Rosas #202, Entre Calle Roble y Calle Cedro.</p>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 5</h5>
                <p>Calle Luna #12, Frente al Mercado La Estrella.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 6</h5>
                <p>Avenida Progreso #400, Zona Industrial, cerca del cruce con Calle 25.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 7</h5>
                <p>Bulevar Verde #88, al lado del Centro Deportivo Olímpico.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="kiosco-card">
                <h5 class="kiosco-title">Kiosco 8</h5>
                <p>Calle Esperanza #9, Frente a la Iglesia San Juan.</p>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
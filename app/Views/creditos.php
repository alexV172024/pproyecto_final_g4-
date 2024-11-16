<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créditos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0; /* Fondo ligeramente oscuro */
            color: #000;
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            margin-left: 20px;
        }
        header img {
            height: 50px;
            margin: 0 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
        }
        .card h5 {
            font-weight: bold;
            color: #000;
        }
        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body> 
    <!-- Encabezado -->
    <header>
        <a href="<?= base_url('/menu'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a> 
    </header>

    <!-- Contenido -->
    <main class="container mt-5">
        <h2 class="text-center mb-4">Créditos</h2>
        <div class="row g-4">
            <!-- Primera persona -->
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <h5 class="text-center">Ana Leticia Yapán Flores</h5>
                    <p class="text-center mb-0">Carné:</p>
                    <p class="text-center">---------</p>
                </div>
            </div>
            <!-- Segunda persona -->
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <h5 class="text-center">Allan Rodrigo Cruz Márquez</h5>
                    <p class="text-center mb-0">Carné:</p>
                    <p class="text-center">202203845</p>
                </div>
            </div>
            <!-- Tercera persona -->
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <h5 class="text-center">Alexis Humberto Noj Vásquez</h5>
                    <p class="text-center mb-0">Carné:</p>
                    <p class="text-center">202205588</p>
                </div>
            </div>
            <!-- Cuarta persona -->
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <h5 class="text-center">Rodolfo Benjamin Estrada</h5>
                    <p class="text-center mb-0">Carné:</p>
                    <p class="text-center">202208847</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <p class="mb-0">© 2024 Universidad San Carlos de Guatemala. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
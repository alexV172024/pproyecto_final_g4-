<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créditos</title>
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

        .header {
            height: 50px;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .header a {
            font-size: 1rem;
            color: #39FF14;
            text-decoration: none;
        }

        .banner {
            height: 200px;
            background-color: #282828;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .banner h1 {
            margin: 0;
            transition: color 0.3s;
        }

        .banner h1 {
            color: #39FF14; 
        }

        .subtitle {
            text-align: center; 
            margin-top: 10px;
            font-size: 1.5rem;
            color: #f1f1f1;
            transition: color 0.3s;
        }

        .subtitle {
            color: #007bff; 
        }

        .container {
            padding: 30px;
            max-width: 800px; 
            margin: 0 auto; 
        }

        .credit-card {
            background-color: #000;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            color: #f1f1f1;
            transition: transform 0.2s, background-color 0.3s;
        }

        .credit-card:hover {
            transform: scale(1.05);
            background-color: #1a1a1a;
        }

        .credit-card h5 {
            color: #f1f1f1;
            font-weight: bold;
            transition: color 0.3s;
        }

        .credit-card h5:hover {
            color: #007bff;
        }

        .credit-card p {
            color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="<?= base_url('/menu'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a>
    </div>

    <div class="banner">
        <h1>Universidad San Carlos de Guatemala</h1>
        <h1>-USAC-</h1>
    </div>
    <div class="subtitle">Integrantes</div> 

    <div class="container">
        <div class="credit-card">
            <h5>Ana Leticia Yapán Flores</h5>
            <p>Carné:202212699</p>
        </div>
        <div class="credit-card">
            <h5>Allan Rodrigo Cruz Márquez</h5>
            <p>Carné: 202203845</p>
        </div>
        <div class="credit-card">
            <h5>Alexis Humberto Noj Vásquez</h5>
            <p>Carné: 202205588</p>
        </div>
        <div class="credit-card">
            <h5>Rodolfo Benjamín Estrada</h5>
            <p>Carné: 202208847</p>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - GAMESTATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            background-color: #121212;
            color: #39FF14;
            font-family: 'Press Start 2P', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background-color: #1c1c1c;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
        }

        h2 {
            color: #39FF14;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            color: #e0e0e0;
            text-align: center;
        }

        .form-label {
            color: #e0e0e0;
        }

        .form-control, .form-select {
            background-color: #333;
            color: #39FF14;
            border: 2px solid #39FF14;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: none;
            border-color: #2ecc71;
        }

        .btn-primary {
            background-color: #39FF14;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2ecc71;
        }

        .form-check-label, .text-center a {
            color: #e0e0e0;
        }

        .text-center a:hover {
            color: #2ecc71;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>REGISTRA TUS DATOS EN GAMESTATION</h2>
        <p>Completa el siguiente formulario para solicitar una cuenta. La información que proporcionas está sujeta a nuestra <a href="">Política de Privacidad</a>.</p>
        
        <form class="row row-cols-lg-3 g-3 align-items-center">
            <div class="col">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            
            <div class="col">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
            </div>
            
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="ejemplo@email.com">
            </div>
            
            <div class="col">
                <label for="contra" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contra" placeholder="Contraseña">
            </div>
            
            <div class="col">
                <label for="confirmarcontra" class="form-label">Confirme Contraseña</label>
                <input type="password" class="form-control" id="confirmarcontra" placeholder="Confirme contraseña">
            </div>

            <div class="col">
                <label for="tipo-usuario" class="form-label">Tipo de Usuario</label>
                <select id="tipo-usuario" class="form-select">
                    <option selected disabled>Selecciona un tipo de usuario</option>
                    <option value="cliente">Cliente</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            
            <div class="col">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" placeholder="Dirección completa">
            </div>
            
            <div class="col">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" placeholder="(+502) 1234-5678">
            </div>
            
            <div class="col">
                <label for="departamento" class="form-label">Departamento</label>
                <select id="departamento" class="form-select">
                    <option selected disabled>Selecciona un departamento</option>
                    <option value="guatemala">Guatemala</option>
                    <option value="sacatepequez">Sacatepéquez</option>
                    <option value="chimaltenango">Chimaltenango</option>
                </select>
            </div>
            
            <div class="col">
                <label for="municipio" class="form-label">Municipio</label>
                <input type="text" class="form-control" id="municipio" placeholder="Antigua Guatemala">
            </div>

            <div class="col">
                <label class="form-label">Tipo de Solicitante</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo-solicitante" id="particular">
                    <label class="form-check-label" for="particular">Particular</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo-solicitante" id="empresa" checked>
                    <label class="form-check-label" for="empresa">Empresa</label>
                </div>
            </div>

            <div class="col">
                <label for="nombre_completo" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre_completo" placeholder="Nombre completo">
            </div>

            <div class="col">
                <label for="nit" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit" placeholder="0000000001">
            </div>
            
            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" id="terminos" class="form-check-input">
                    <label for="terminos" class="form-check-label">Aceptar los términos y condiciones</label>
                </div>
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

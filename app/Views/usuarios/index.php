<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;  /* Para que ocupe todo el espacio disponible */
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 0.9rem;  /* Reducir el tamaño de la fuente */
        }

        th, td {
            padding: 8px;  /* Reducir el padding */
            text-align: left;
        }

        th {
            background-color: #343a40 !important;  /* Fuerza el color de fondo */
            color: white !important;                /* Fuerza el color del texto */
            font-weight: bold;
        }

        td {
            background-color: #f8f9fa;
            color: #495057;
        }

        td a {
            color: #ffffff;
            text-decoration: none;
            padding: 4px 8px;
            border-radius: 5px;
            margin-right: 5px;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .alert {
            margin-top: 20px;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        /* Ajuste para pantallas pequeñas */
        @media (max-width: 768px) {
            table {
                font-size: 0.8rem;
            }

            td, th {
                padding: 6px; /* Reducir padding en pantallas pequeñas */
            }

            .container {
                padding: 15px;  /* Reducir el padding en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Usuarios</h1>

        <!-- Botón para crear nuevo usuario -->
        <a href="<?= site_url('usuarios/create') ?>" class="btn btn-primary mb-3">Crear nuevo usuario</a>

        <!-- Tabla de usuarios -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>usuario_id</th>
                    <th>nombre_usuario</th>
                    <th>contraseña</th>
                    <th>cliente_id</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['usuario_id']; ?></td>
                        <td><?= $usuario['nombre_usuario']; ?></td>
                        <td><?= $usuario['contrasenia']; ?></td>
                       
                        <td>
                            <!-- Botón para editar -->
                            <a href="<?= site_url('usuarios/edit/' . $usuario['usuario_id']); ?>" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Botón para eliminar -->
                            <a href="<?= site_url('usuarios/delete/' . $usuario['usuario_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

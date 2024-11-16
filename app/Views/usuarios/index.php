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
            max-width: 100%;
        }

        h2 {
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
            font-size: 0.9rem;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #343a40 !important;
            color: white !important;
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

        @media (max-width: 768px) {
            table {
                font-size: 0.8rem;
            }

            td, th {
                padding: 6px;
            }

            .container {
                padding: 15px;
            }
        }
        .pagination-links {
            margin-top: 40px; 
            display: flex;
            justify-content: center;
        }
        .pagination-links .pagination a {
            margin: 0 5px; 
        }
        @media (max-width: 768px) {
            table {
                font-size: 0.8rem;
            }
            td, th {
                padding: 6px;
            }
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
<div class="container my-5">
    <a href="<?= base_url('/admin'); ?>" class="navbar-brand fw-semibold">GAMESTATION</a>   
    <h2 class="mb-4">Usuarios</h2>

        <!-- Formulario de búsqueda -->
        <form method="get" action="<?= base_url('usuarios'); ?>" class="mb-3 d-flex">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Buscar usuario" value="<?= esc($search); ?>">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='<?= base_url('usuarios'); ?>'">Borrar</button>
    </div>
</form>

        <a href="<?= site_url('usuarios/create') ?>" class="btn btn-primary mb-3">Crear nuevo usuario</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>usuario_id</th>
                    <th>nombre_usuario</th>
                    <th>contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario['usuario_id']; ?></td>
                            <td><?= $usuario['nombre_usuario']; ?></td>
                            <td><?= $usuario['contraseña']; ?></td>
                            <td>
                                <a href="<?= site_url('usuarios/edit/' . $usuario['usuario_id']); ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= site_url('usuarios/delete/' . $usuario['usuario_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No se encontraron usuarios.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Enlaces de paginación -->
        <div class="pagination-links">
            <?= $pager->links(); ?>
        </div>
    </div>
</body>
</html>

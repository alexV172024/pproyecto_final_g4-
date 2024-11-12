<?php

namespace App\Models;

use CodeIgniter\Model;

class TiendaModel extends Model
{
    protected $table = 'videojuegos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'videojuego_id';

    protected $allowedFields = ['videojuego_id', 'plataforma', 'genero', 'precio', 'cantidad', 'proveedor_id'];
}

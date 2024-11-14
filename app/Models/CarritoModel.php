<?php

namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'carrito_id';
    protected $allowedFields = ['videojuego_id', 'cantidad'];
}
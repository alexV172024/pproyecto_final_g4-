<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'accesorios';
    protected $primaryKey = 'accesorio_id';
    protected $allowedFields = ['nombre', 'marca', 'modelo', 'precio', 'proveedor_id', 'stock'];
}
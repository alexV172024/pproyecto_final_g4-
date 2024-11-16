<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarioModel extends Model
{
    protected $table = 'inventario';
    protected $primaryKey = 'inventario_id';
    protected $allowedFields = ['accesorio', 'cantidad', 'precio', 'ubicacion', 'fecha_ingreso'];

}

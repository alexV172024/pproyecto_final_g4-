<?php namespace App\Models;

use CodeIgniter\Model;

class ProveedoresModel extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'proveedor_id';
    protected $allowedFields = ['nombre', 'contacto', 'productos_suministrados'];
}

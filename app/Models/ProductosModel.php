<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';  // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';   // Clave primaria
    protected $allowedFields = ['nombre', 'marca', 'modelo', 'precio', 'stock'];  // Campos permitidos

    // Si necesitas puedes agregar reglas de validación o personalizar métodos
}
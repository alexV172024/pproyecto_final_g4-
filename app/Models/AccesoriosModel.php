<?php

namespace App\Models;

use CodeIgniter\Model;

class AccesoriosModel extends Model
{
    protected $table = 'accesorios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'marca', 'modelo', 'precio'];

}

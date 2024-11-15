<?php

namespace App\Models;

use CodeIgniter\Model;

class RecuperarcontraModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['nombre_usuario', 'contraseña'];
}
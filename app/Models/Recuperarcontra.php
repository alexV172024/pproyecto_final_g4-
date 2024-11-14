<?php namespace App\Models;

use CodeIgniter\Model;

class RecuperarcontrasModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['contraseña'];
}

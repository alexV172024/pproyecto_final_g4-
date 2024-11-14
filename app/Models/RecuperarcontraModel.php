<?php

namespace App\Models;

use CodeIgniter\Model;

class RecuperarContraModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['nombre_usuario', 'contraseña', 'cliente_id']; 

    public function verificarUsuario($usuario)
    {
        return $this->where('nombre_usuario', $usuario)->first();  
    }
}
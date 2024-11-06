<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['nombre_usuario', 'contraseña'];

    // Método para validar el usuario
    public function validarUsuario($nombre_usuario, $contraseña)
    {
        // Consulta para encontrar el usuario
        $usuario = $this->where('nombre_usuario', $nombre_usuario)->first();

        // Verifica la contraseña (asegúrate de usar password_hash en la base de datos)
        return $usuario && password_verify($contraseña, $usuario['contraseña']);
    }
}

<?php

namespace App\Controllers;

use App\Models\RecuperarcontraModel;

class RecuperarContraController extends BaseController
{
    public function index()
    {
        // Método de prueba o redirección
        return view('recuperarcontra/index');
    }

    public function procesarRecuperacion()
    {
        $recuperarModel = new RecuperarcontraModel();
        $nombreUsuario = $this->request->getPost('usuario');
        
        $usuario = $recuperarModel->where('nombre_usuario', $nombreUsuario)->first();

        if ($usuario) {
            $data['contraseña'] = $usuario['contraseña'];
            $data['mensaje'] = 'Contraseña recuperada exitosamente.';
        } else {
            $data['contraseña'] = '';
            $data['mensaje'] = 'Usuario no encontrado.';
        }

        return view('recuperarcontra/index', $data);
    }
}
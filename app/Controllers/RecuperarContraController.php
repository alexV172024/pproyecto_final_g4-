<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RecuperarContraModel;

class RecuperarContraController extends Controller
{
    public function index()
    {
        return view('recuperarcontra/index');
    }

    public function procesarRecuperacion()
    {
        // Aquí iría el código para procesar el formulario
        // 1. Obtener el nombre de usuario del formulario
        $usuario = $this->request->getPost('usuario');
        
        // 2. Usar el modelo para verificar el usuario en la base de datos
        $model = new RecuperarContraModel();
        $usuarioEncontrado = $model->verificarUsuario($usuario);

        // 3. Si el usuario existe, mostramos su contraseña
        if ($usuarioEncontrado) {
            // Mostrar la contraseña al usuario
            return view('recuperarcontra/mostrar', ['usuario' => $usuarioEncontrado]);
        } else {
            // Si no se encuentra al usuario, mostrar mensaje de error
            return redirect()->back()->with('mensaje', 'Usuario no encontrado');
        }
    }
}
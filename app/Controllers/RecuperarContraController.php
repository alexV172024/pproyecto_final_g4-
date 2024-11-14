<?php

namespace App\Controllers;

use App\Models\RecuperarContraModel; // Asegúrate de usar el modelo adecuado
use CodeIgniter\Controller;

class RecuperarContraController extends Controller
{
    public function index()
    {
        return view('recuperarcontra/index');  // Mostrar el formulario de recuperación
    }

    // Método para procesar el formulario
    public function procesarRecuperacion()
    {
        // Obtener el nombre de usuario desde el formulario
        $usuario = $this->request->getPost('usuario');

        // Instanciar el modelo
        $model = new RecuperarContraModel();  // Usamos el modelo RecuperarContraModel

        // Verificar si el usuario existe en la base de datos
        $usuarioDatos = $model->verificarUsuario($usuario);

        if ($usuarioDatos) {
            // Si el usuario existe, mostramos su contraseña
            return view('recuperarcontra/mostrarContraseña', [
                'usuario' => $usuario,
                'contraseña' => $usuarioDatos['contraseña']  // Mostrar la contraseña almacenada
            ]);
        } else {
            // Si el usuario no existe, mostramos un mensaje de error
            return view('recuperarcontra/error', [
                'mensaje' => 'El nombre de usuario no existe en nuestros registros.'
            ]);
        }
    }
}
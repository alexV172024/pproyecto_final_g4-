<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactoController extends Controller
{
    public function enviarMensaje()
    {
        $request = \Config\Services::request();

        // Validar datos
        $nombre = $request->getPost('nombre');
        $email = $request->getPost('email');
        $mensaje = $request->getPost('mensaje');

        if ($nombre && $email && $mensaje) {
            // Simular el envío de correo (reemplaza esto con tu lógica de correo)
            session()->setFlashdata('success', 'Mensaje enviado con éxito.');
            return redirect()->to('/contacto');
        } else {
            session()->setFlashdata('error', 'Ocurrió un problema al enviar el mensaje.');
            return redirect()->to('/contacto');
        }
    }
}

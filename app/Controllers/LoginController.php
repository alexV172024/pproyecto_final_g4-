<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller
{
    // Muestra la vista de inicio de sesión
    public function index()
    {
        return view('inicio'); // Cargar la vista de inicio de sesión
    }

    // Procesa el formulario de inicio de sesión y valida los datos
    public function login()
    {
        // Obtener las credenciales del formulario
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');

        // Conexión a la base de datos
        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        
        // Consultar si el nombre de usuario existe en la base de datos
        $user = $builder->where('nombre_usuario', $nombre_usuario)->get()->getRowArray();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && $contraseña === $user['contraseña']) {
            // Si las credenciales son correctas, redirigir a la vista del menú
            return redirect()->to('/menu');
        } else {
            // Si las credenciales son incorrectas, redirigir al login con un mensaje de error
            return redirect()->to('/')->with('error', 'Usuario y/o contraseña incorrectos. Vuelva a ingresar los datos');
        }
    }

    // Muestra la vista del menú
    public function menu()
    {
        return view('menu'); // Cargar la vista menu.php
    }

    // Muestra la vista de registro de usuario
    public function registro_usuario()
    {
        return view('registro_usuario'); // Cargar la vista registro_usuario.php
    }
}

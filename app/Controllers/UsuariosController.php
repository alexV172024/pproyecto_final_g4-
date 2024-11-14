<?php namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class UsuariosController extends BaseController
{
    // Método para mostrar todos los usuarios
    public function index()
    {
        $model = new UsuariosModel();
        $data['usuarios'] = $model->findAll();
        return view('usuarios/index', $data);
    }

    // Método para mostrar el formulario de creación de usuario
    public function create()
    {
        return view('usuarios/create');
    }

    // Método para guardar el nuevo usuario
    public function store()
    {
        // Recibir los datos del formulario
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');
        
        // Hash de la contraseña
        $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);
        
        // Preparar los datos para insertar
        $data = [
            'nombre_usuario' => $nombre_usuario,
            'contraseña' => $hashed_password
        ];

        // Instanciar el modelo de Usuario
        $usuarioModel = new UsuariosModel();
        $usuarioModel->insert($data);

        // Redirigir a la lista de usuarios
        return redirect()->to('/usuarios');
    }

    // Método para mostrar el formulario de edición de usuario
    public function edit($id)
    {
        $model = new UsuariosModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/edit', $data);
    }

    // Método para actualizar un usuario
    public function update($id)
    {
        // Recibir los datos del formulario
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');
        
        // Si la contraseña se modificó, la hasheamos
        if (!empty($contraseña)) {
            $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        } else {
            // Si la contraseña no se modificó, no cambiamos el valor
            $contraseña = $this->request->getPost('contraseña_actual');  // Asumiendo que el valor actual se envíe en el formulario
        }
        
        // Preparar los datos para actualizar
        $data = [
            'nombre_usuario' => $nombre_usuario,
            'contraseña' => $contraseña
        ];

        // Instanciar el modelo de Usuario
        $model = new UsuariosModel();
        $model->update($id, $data);

        // Redirigir a la lista de usuarios
        return redirect()->to('/usuarios');
    }

    // Método para eliminar un usuario
    public function delete($id)
    {
        $model = new UsuariosModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}

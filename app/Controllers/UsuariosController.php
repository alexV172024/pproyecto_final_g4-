<?php namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class UsuariosController extends BaseController
{
    // Método para mostrar todos los usuarios con búsqueda y paginación
    public function index()
    {
        $model = new UsuariosModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['usuarios'] = $model->like('nombre_usuario', $searchQuery)
                                      ->orLike('usuario_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['usuarios'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

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
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');

        $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

        $data = [
            'nombre_usuario' => $nombre_usuario,
            'contraseña' => $hashed_password
        ];

        $usuarioModel = new UsuariosModel();
        $usuarioModel->insert($data);

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
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $contraseña = $this->request->getPost('contraseña');

        if (!empty($contraseña)) {
            $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        } else {
            $contraseña = $this->request->getPost('contraseña_actual');
        }

        $data = [
            'nombre_usuario' => $nombre_usuario,
            'contraseña' => $contraseña
        ];

        $model = new UsuariosModel();
        $model->update($id, $data);

        return redirect()->to('/usuarios');
    }

    // Método para eliminar un usuario
    public function delete($id)
    {
        $model = new UsuariosModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }

    // Método para realizar búsqueda
    public function search()
    {
        $model = new UsuariosModel();
        $searchQuery = $this->request->getGet('search');

        if ($searchQuery !== null && $searchQuery !== '') {
            $data['usuarios'] = $model->like('nombre_usuario', $searchQuery)
                                      ->orLike('usuario_id', $searchQuery)
                                      ->paginate(5);
            $data['pager'] = $model->pager;
            $data['search'] = $searchQuery;
            return view('usuarios/index', $data);
        } else {
            return redirect()->to('/usuarios');
        }
    }
}

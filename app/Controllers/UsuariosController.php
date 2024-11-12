<?php namespace App\Controllers;

use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index()
    {
        $model = new UsuariosModel();
        $data['usuarios'] = $model->findAll();
        return view('usuarios/index', $data);
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $model = new UsuariosModel();
        $model->insert([
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'contrasenia' => $this->request->getPost('contrasenia'),
           
        ]);
        return redirect()->to('/usuarios');
    }

    public function edit($id)
    {
        $model = new UsuariosModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/edit', $data);
    }

    public function update($id)
    {
        $model = new UsuariosModel();
        $model->update($id, [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'contrasenia' => $this->request->getPost('contrasenia'),
            
        ]);
        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $model = new UsuariosModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}

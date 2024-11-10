<?php namespace App\Controllers;

use App\Models\VideojuegosModel;

class VideojuegosController extends BaseController
{
    public function index()
    {
        $model = new VideojuegosModel();
        $data['videojuegos'] = $model->findAll();
        return view('videojuegos/index', $data);
    }

    public function create()
    {
        return view('videojuegos/create');
    }

    public function store()
    {
        $model = new VideojuegosModel();
        $model->insert([
            'titulo' => $this->request->getPost('titulo'),
            'plataforma' => $this->request->getPost('plataforma'),
            'genero' => $this->request->getPost('genero'),
            'precio' => $this->request->getPost('precio'),
            'cantidad' => $this->request->getPost('cantidad'),
            'proveedor_id' => $this->request->getPost('proveedor_id'),
        ]);
        return redirect()->to('/videojuegos');
    }

    public function edit($id)
    {
        $model = new VideojuegosModel();
        $data['videojuego'] = $model->find($id);
        return view('videojuegos/edit', $data);
    }

    public function update($id)
    {
        $model = new VideojuegosModel();
        $model->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'plataforma' => $this->request->getPost('plataforma'),
            'genero' => $this->request->getPost('genero'),
            'precio' => $this->request->getPost('precio'),
            'cantidad' => $this->request->getPost('cantidad'),
            'proveedor_id' => $this->request->getPost('proveedor_id'),
        ]);
        return redirect()->to('/videojuegos');
    }

    public function delete($id)
    {
        $model = new VideojuegosModel();
        $model->delete($id);
        return redirect()->to('/videojuegos');
    }
}

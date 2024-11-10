<?php namespace App\Controllers;

use App\Models\ProveedoresModel;

class ProveedoresController extends BaseController
{
    public function index()
    {
        $model = new ProveedoresModel();
        $data['proveedores'] = $model->findAll();
        return view('proveedores/index', $data);
    }

    public function create()
    {
        return view('proveedores/create');
    }

    public function store()
    {
        $model = new ProveedoresModel();
        $model->insert([
            'nombre' => $this->request->getPost('nombre'),
            'contacto' => $this->request->getPost('contacto'),
            'productos_suministrados' => $this->request->getPost('productos_suministrados'),
        ]);
        return redirect()->to('/proveedores');
    }

    public function edit($id)
    {
        $model = new ProveedoresModel();
        $data['proveedor'] = $model->find($id);
        return view('proveedores/edit', $data);
    }

    public function update($id)
    {
        $model = new ProveedoresModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'contacto' => $this->request->getPost('contacto'),
            'productos_suministrados' => $this->request->getPost('productos_suministrados'),
        ]);
        return redirect()->to('/proveedores');
    }

    public function delete($id)
    {
        $model = new ProveedoresModel();
        $model->delete($id);
        return redirect()->to('/proveedores');
    }
}

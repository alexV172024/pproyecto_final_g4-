<?php namespace App\Controllers;

use App\Models\ProveedoresModel;

class ProveedoresController extends BaseController
{
    public function index()
    {
        $model = new ProveedoresModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['proveedores'] = $model->like('nombre', $searchQuery)
                                      ->orLike('proveedor_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['proveedores'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

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

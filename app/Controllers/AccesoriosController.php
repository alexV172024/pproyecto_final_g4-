<?php

namespace App\Controllers;


use App\Models\AccesorioModel;

class AccesoriosController extends BaseController
{
    public function index()
    {
        $model = new AccesorioModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['accesorios'] = $model->like('nombre', $searchQuery)
                                    ->orLike('marca', $searchQuery)
                                      ->orLike('accesorio_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['accesorios'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

        return view('accesorios/index', $data);
    }
    public function create()
    {
        return view('accesorios/create');
    }

    public function store()
    {
        $model = new AccesorioModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'precio' => $this->request->getPost('precio'),
            'proveedor_id' => $this->request->getPost('proveedor_id'),
            'stock' => $this->request->getPost('stock'),
        ]);

        return redirect()->to('/accesorios');
    }

    public function edit($id)
    {
        $model = new AccesorioModel();
        $data['accesorio'] = $model->find($id);

        return view('accesorios/edit', $data);
    }

    public function update($id)
    {
        $model = new AccesorioModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'precio' => $this->request->getPost('precio'),
            'proveedor_id' => $this->request->getPost('proveedor_id'),
            'stock' => $this->request->getPost('stock'),
        ]);

        return redirect()->to('/accesorios');
    }

    public function delete($id)
    {
        $model = new AccesorioModel();
        $model->delete($id);

        return redirect()->to('/accesorios');
    }

}
<?php namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index()
    {
        $model = new ClientesModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['clientes'] = $model->like('nombre', $searchQuery)
                                      ->orLike('cliente_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['clientes'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

        return view('clientes/index', $data);
    }

    public function create()
    {
        return view('clientes/create');
    }

    public function store()
    {
        $model = new clientesModel();
        $model->insert([
            'nombre' => $this->request->getPost('nombre'),
            'contacto' => $this->request->getPost('contacto'),
            'historial_compras' => $this->request->getPost('historial_compras'),
        ]);
        return redirect()->to('/clientes');
    }

    public function edit($id)
    {
        $model = new ClientesModel();
        $data['cliente'] = $model->find($id);
        return view('clientes/edit', $data);
    }

    public function update($id)
    {
        $model = new ClientesModel();
        $model->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'contacto' => $this->request->getPost('contacto'),
            'historial_compras' => $this->request->getPost('historial_compras'),
        ]);
        return redirect()->to('/clientes');
    }

    public function delete($id)
    {
        $model = new ClientesModel();
        $model->delete($id);
        return redirect()->to('/clientes');
    }
}

<?php namespace App\Controllers;

use App\Models\VentasModel;

class VentasController extends BaseController
{
    public function index()
    {
        $model = new VentasModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['ventas'] = $model->like('fecha_ventas', $searchQuery)
                                      ->orLike('venta_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['ventas'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

        return view('ventas/index', $data);
    }
    public function create()
    {
        return view('ventas/create');
    }

    public function store()
    {
        $model = new VentasModel();
        $model->insert([
            'cliente_id' => $this->request->getPost('cliente_id'),
            'videojuego_id' => $this->request->getPost('videojuego_id'),
            'fecha_venta' => $this->request->getPost('fecha_venta'),
            'cantidad' => $this->request->getPost('cantidad'),
            'usuario_id' => $this->request->getPost('usuario_id'),
        ]);
        return redirect()->to('/ventas');
    }

    public function edit($id)
    {
        $model = new VentasModel();
        $data['venta'] = $model->find($id); 
        return view('ventas/edit', $data);
    }

    public function update($id)
    {
        $model = new VentasModel();
        $model->update($id, [
            'cliente_id' => $this->request->getPost('cliente_id'),
            'videojuego_id' => $this->request->getPost('videojuego_id'),
            'fecha_venta' => $this->request->getPost('fecha_venta'),
            'cantidad' => $this->request->getPost('cantidad'),
            'usuario_id' => $this->request->getPost('usuario_id'),
        ]);
        return redirect()->to('/ventas');
    }

    public function delete($id)
    {
        $model = new VentasModel();
        $model->delete($id);
        return redirect()->to('/ventas');
    }
}
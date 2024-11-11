<?php namespace App\Controllers;

use App\Models\DetalleVentasModel;

class DetalleVentasController extends BaseController
{
    public function index()
    {
        $model = new DetalleVentasModel();
        $data['detalle_ventas'] = $model->findAll();
        return view('detalle_ventas/index', $data);
    }

    public function create()
    {
        return view('detalle_ventas/create');
    }

    public function store()
    {
        $model = new DetalleVentasModel();
        $model->insert([
            'venta_id' => $this->request->getPost('venta_id'),
            'producto_id' => $this->request->getPost('producto_id'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
        ]);
        return redirect()->to('/detalle_ventas');
    }

    public function edit($id)
    {
        $model = new DetalleVentasModel();
        $data['detalle_venta'] = $model->find($id);
        return view('detalle_ventas/edit', $data);
    }

    public function update($id)
    {
        $model = new DetalleVentasModel();
        $model->update($id, [
            'venta_id' => $this->request->getPost('venta_id'),
            'producto_id' => $this->request->getPost('producto_id'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
        ]);
        return redirect()->to('/detalle_ventas');
    }

    public function delete($id)
    {
        $model = new DetalleVentasModel();
        $model->delete($id);
        return redirect()->to('/detalle_ventas');
    }
}
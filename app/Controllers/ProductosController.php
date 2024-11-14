<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        $productoModel = new ProductosModel();

        $data['accesorios'] = $productoModel->getProductos();

        return view('productos', $data);  
    }
}
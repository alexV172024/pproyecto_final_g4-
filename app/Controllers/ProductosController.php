<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductosModel;  

class ProductosController extends Controller
{
    public function index()
    {

        $productosModel = new ProductosModel();

        $data['productos'] = $productosModel->findAll(); 

        return view('productos', $data);  
    }
}
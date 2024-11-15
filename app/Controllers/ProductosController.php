<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductosModel;  // Importa el modelo

class ProductosController extends Controller
{
    public function index()
    {
        // Crear una instancia del modelo ProductosModel
        $productosModel = new ProductosModel();
        
        // Obtener todos los productos
        $data['productos'] = $productosModel->findAll();  // O cualquier método que necesites

        // Cargar la vista y pasar los productos como datos
        return view('productos', $data);  // 'productos' es el nombre de la vista
    }
}
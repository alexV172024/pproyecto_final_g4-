<?php

namespace App\Controllers;

use App\Models\AccesoriosModel;

class CatalogoAccesorios extends BaseController
{
    public function index()
    {
        $accesoriosModel = new AccesoriosModel();
        $data['accesorios'] = $accesoriosModel->findAll();  // Obtén todos los accesorios

        return view('catalogo_accesorios', $data);  // Carga la vista con los datos
    }
}

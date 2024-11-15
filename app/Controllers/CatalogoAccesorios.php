<?php

namespace App\Controllers;

use App\Models\AccesoriosModel;

class CatalogoAccesorios extends BaseController
{
    public function index()
    {
        $accesoriosModel = new AccesoriosModel();
        $data['accesorios'] = $accesoriosModel->findAll();  

        return view('catalogo_accesorios', $data); 
    }
}
 
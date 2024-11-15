<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CarritoController extends Controller
{
    public function agregar($accesorio_id)
    {
        $carrito = session()->get('carrito');
        if (!$carrito) {
            $carrito = [];
        }

        // Añadir el accesorio al carrito
        $carrito[] = $accesorio_id;
        session()->set('carrito', $carrito);

        return redirect()->to('/carrito');
    }

    public function ver()
    {
    $carrito = session()->get('carrito') ?: [];
    $accesoriosModel = new \App\Models\AccesoriosModel();
    $items = [];

    foreach ($carrito as $accesorio_id) {
        $accesorio = $accesoriosModel->find($accesorio_id);
        if ($accesorio) {
            $items[] = $accesorio;
        }
    }

    return view('carrito', ['carrito' => $items]);
}
} 
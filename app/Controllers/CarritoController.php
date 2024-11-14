<?php

namespace App\Controllers;

use App\Models\CarritoModel;

class CarritoController extends BaseController
{
    public function agregar($id)
    {
        $carritoModel = new CarritoModel();

        $datosCarrito = [
            'videojuego_id' => $id,
            'cantidad' => 1 
        ];

        $carritoModel->insert($datosCarrito);

        return redirect()->to('/carrito')->with('success', 'Juego agregado al carrito');
    }

    public function index()
    {
        $carritoModel = new CarritoModel();
        $items = $carritoModel->findAll();

        return view('carrito/index', ['items' => $items]);
    }
}
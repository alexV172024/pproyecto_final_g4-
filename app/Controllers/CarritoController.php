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

    // Otros métodos para ver el carrito, eliminar, etc.
}
<?php

namespace App\Controllers;

use App\Models\TiendaModel;

class TiendaController extends BaseController
{
    public function index()
    {
        $tiendaModel = new TiendaModel();
        $juegos = $tiendaModel->select('videojuego_id, titulo, plataforma, genero, precio')->findAll();

        // Asegúrate de usar 'tienda/index' si la vista está en esa ubicación
        return view('tienda/index', ['juegos' => $juegos]);
    }

    public function comprar($id)
    {
        // Implementación de la lógica para la compra
    }
}

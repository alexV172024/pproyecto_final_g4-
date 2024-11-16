<?php

namespace App\Controllers;

use App\Models\TiendaModel;

class TiendaController extends BaseController
{
    public function index()
    {
        // Inicializamos el modelo
        $tiendaModel = new TiendaModel();

        // Obtener la búsqueda desde el formulario (si existe)
        $busqueda = $this->request->getPost('busqueda');

        // Si se realizó una búsqueda, aplicamos el filtro
        if ($busqueda) {
            $juegos = $tiendaModel->select('videojuego_id, titulo, plataforma, genero, precio')
                                  ->like('titulo', $busqueda)  // Filtramos por el título del juego
                                  ->findAll();
        } else {
            // Si no hay búsqueda, obtenemos todos los juegos
            $juegos = $tiendaModel->select('videojuego_id, titulo, plataforma, genero, precio')->findAll();
        }

        // Pasamos los juegos y el término de búsqueda a la vista
        return view('tienda/index', [
            'juegos' => $juegos, 
            'busqueda' => $busqueda // Aseguramos que el término de búsqueda esté disponible en la vista
        ]);
    }

   
}


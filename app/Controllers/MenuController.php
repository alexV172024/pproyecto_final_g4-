<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends Controller
{
    public function index()
    {
        return view('inicio'); // Carga la vista de inicio
    }

    public function tienda()
    {
        return view('tienda'); // Carga la vista de tienda
    }

    public function ubicacion()
    {
        return view('ubicacion'); // Carga la vista de ubicación
    }

    public function contacto()
    {
        return view('contacto'); // Carga la vista de contacto
    }

    public function novedades()
    {
        return view('novedades'); // Carga la vista de novedades
    }

    public function ofertas()
    {
        return view('ofertas'); // Carga la vista de ofertas
    }
    public function creditos()
    {
        return view('creditos'); // Carga la vista de creditos
    }
}

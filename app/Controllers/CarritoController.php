<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Carrito extends Controller
{
    public function index()
    {
        // Obtener los productos del carrito de la sesión
        $carrito = session()->get('carrito');
        
        return view('carrito', ['carrito' => $carrito]);
    }

    public function agregar()
    {
   
        $accesorio = [
            'id' => $this->request->getPost('id'),
            'nombre' => $this->request->getPost('nombre'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'precio' => $this->request->getPost('precio')
        ];

        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito') ?? [];

        // Agregar el accesorio al carrito
        $carrito[] = $accesorio;

        // Guardar el carrito actualizado en la sesión
        session()->set('carrito', $carrito);

        // Redirigir al carrito
        return redirect()->to(site_url('carrito'));
    }

    public function eliminar($id)
    {
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito');

        // Eliminar el accesorio del carrito
        foreach ($carrito as $key => $item) {
            if ($item['id'] == $id) {
                unset($carrito[$key]);
                break;
            }
        }

        // Guardar el carrito actualizado en la sesión
        session()->set('carrito', $carrito);

        // Redirigir al carrito
        return redirect()->to(site_url('carrito'));
    }
}
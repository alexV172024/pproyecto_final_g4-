<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CarritoController extends Controller
{
    public function index()
    {
        // Obtener los productos del carrito de la sesión
        $carrito = session()->get('carrito');
        
        return view('carrito', ['carrito' => $carrito]);
    }

    public function agregar()
    {
        // Obtener los datos del producto a partir de la solicitud POST
        $producto = [
            'id' => $this->request->getPost('id'),
            'nombre' => $this->request->getPost('nombre'),
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'precio' => $this->request->getPost('precio')
        ];
        
        $videojuego =[
            'videojuego_id' => $this->request->getPost('videojuego_id'),
            'titulo' => $this->request->getPost('titulo'),
            'plataforma' => $this->request->getPost('plataforma'),
            'genero' => $this->request->getPost('genero'),
            'precio' => $this->request->getPost('precio'),

        ];


        // Recuperar el carrito actual de la sesión o inicializarlo
        $carrito = session()->get('carrito') ?? [];
    
        // Comprobar si el producto ya está en el carrito y actualizarlo si es necesario
        $existe = false;
        foreach ($carrito as &$item) {
            if ($item['id'] == $producto['id']) {
                $existe = true;
                break;
            }
        }
    
        // Si el producto no existe, agregarlo al carrito
        if (!$existe) {
            $carrito[] = $producto;
        }
    
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
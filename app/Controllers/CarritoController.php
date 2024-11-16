<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CarritoController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // Obtener los productos del carrito de la sesión
        $carrito = $this->session->get('carrito');
        
        return view('carrito', ['carrito' => $carrito]);
    }

   public function agregar()
{
    $producto = [
        'id' => $this->request->getPost('id'),
        'nombre' => $this->request->getPost('nombre'),
        'marca' => $this->request->getPost('marca'),
        'modelo' => $this->request->getPost('modelo'),
        'titulo' => $this->request->getPost('titulo'), 
        'plataforma' => $this->request->getPost('plataforma'), 
        'genero' => $this->request->getPost('genero'), 
        'precio' => $this->request->getPost('precio'),
        'cantidad' => 1 // Se agrega una cantidad inicial de 1
    ];

    // Recuperar el carrito actual de la sesión
    $carrito = $this->session->get('carrito') ?? [];

    // Comprobar si el producto ya está en el carrito y actualizar la cantidad si es necesario
    $existe = false;
    foreach ($carrito as &$item) {
        if ($item['id'] == $producto['id']) {
            $existe = true;
            $item['cantidad'] += 1; // Si existe, se suma 1 a la cantidad
            break;
        }
    }

    // Si el producto no existe, agregarlo al carrito
    if (!$existe) {
        $carrito[] = $producto;
    }

    // Guardar el carrito actualizado en la sesión
    $this->session->set('carrito', $carrito);

    // Redirigir al carrito
    return redirect()->to(site_url('carrito'));
}


    public function eliminar($id)
    {
        // Obtener el carrito de la sesión
        $carrito = $this->session->get('carrito');

        // Eliminar el producto del carrito
        foreach ($carrito as $key => $item) {
            if ($item['id'] == $id) {
                unset($carrito[$key]);
                break;
            }
        }

        // Reindexar el array para evitar índices rotos
        $carrito = array_values($carrito);

        // Guardar el carrito actualizado en la sesión
        $this->session->set('carrito', $carrito);

        // Redirigir al carrito
        return redirect()->to(site_url('carrito'));
    }

    public function borrar_todo()
    {
        // Eliminar todos los productos del carrito
        $this->session->remove('carrito');
        
        // Redirigir a la página del carrito vacío
        return redirect()->to('carrito');
    }

    public function sumar($id)
    {
        // Obtener el carrito de la sesión
        $carrito = $this->session->get('carrito');

        // Buscar el producto y sumar 1 a la cantidad
        foreach ($carrito as &$item) {
            if ($item['id'] == $id) {
                $item['cantidad'] += 1;
                break;
            }
        }

        // Guardar el carrito actualizado en la sesión
        $this->session->set('carrito', $carrito);

        // Redirigir al carrito
        return redirect()->to(site_url('carrito'));
    }

    public function restar($id)
    {
        // Obtener el carrito de la sesión
        $carrito = $this->session->get('carrito');

        // Buscar el producto y restar 1 a la cantidad
        foreach ($carrito as &$item) {
            if ($item['id'] == $id && $item['cantidad'] > 1) {
                $item['cantidad'] -= 1;
                break;
            }
        }

        // Guardar el carrito actualizado en la sesión
        $this->session->set('carrito', $carrito);

        // Redirigir al carrito
        return redirect()->to(site_url('carrito'));
    }
}

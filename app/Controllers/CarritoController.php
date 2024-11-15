<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AccesoriosModel;
use App\Models\CarritoModel;

class CarritoController extends Controller
{
    // Agregar accesorio al carrito
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

    // Ver los productos en el carrito
    public function ver()
    {
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito') ?: [];
        
        // Crear instancia del modelo AccesoriosModel
        $accesoriosModel = new AccesoriosModel();
        
        // Crear un array para almacenar los accesorios del carrito
        $items = [];

        // Recorrer los IDs de los accesorios en el carrito
        foreach ($carrito as $accesorio_id) {
            // Obtener información del accesorio usando el modelo
            $accesorio = $accesoriosModel->find($accesorio_id);
            if ($accesorio) {
                // Añadir accesorio al carrito
                $items[] = $accesorio;
            }
        }

        // Pasar los productos a la vista
        return view('carrito', ['carrito' => $items]);
    }

    // Eliminar un accesorio del carrito (opcional)
    public function eliminar($accesorio_id)
    {
        $carrito = session()->get('carrito');
        if ($carrito) {
            // Filtrar el carrito para eliminar el accesorio con el ID dado
            $carrito = array_filter($carrito, fn($item) => $item !== $accesorio_id);
            session()->set('carrito', $carrito);
        }

        return redirect()->to('/carrito');
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'id';
    protected $allowedFields = ['accesorio_id', 'cantidad'];

    // Obtener los productos del carrito
    public function getCarrito()
    {
        return $this->findAll();
    }

    // Agregar un accesorio al carrito
    public function agregarAlCarrito($accesorio_id)
    {
        // Verificar si el accesorio ya está en el carrito
        $producto = $this->where('accesorio_id', $accesorio_id)->first();

        if ($producto) {
            // Si ya está, incrementar la cantidad
            $this->update($producto['id'], [
                'cantidad' => $producto['cantidad'] + 1
            ]);
        } else {
            // Si no está, agregarlo al carrito
            $this->insert([
                'accesorio_id' => $accesorio_id,
                'cantidad' => 1
            ]);
        }
    }

    // Eliminar un accesorio del carrito
    public function eliminarDelCarrito($id)
    {
        $this->delete($id);
    }

    // Vaciar el carrito
    public function vaciarCarrito()
    {
        $this->emptyTable();
    }
}
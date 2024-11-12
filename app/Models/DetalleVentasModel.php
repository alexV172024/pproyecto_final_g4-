<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleVentasModel extends Model
{
    protected $table = 'detalle_ventas';
    protected $primaryKey = 'detalle_id';
    protected $allowedFields = ['venta_id', 'videojuego_id', 'cantidad', 'precio_unitario', 'total'];
}
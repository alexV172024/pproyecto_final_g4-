<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleVentasModel extends Model
{
    protected $table = 'detalle_ventas';
    protected $primaryKey = 'detalle_venta_id';
    protected $allowedFields = ['venta_id', 'producto_id', 'cantidad', 'precio'];
}
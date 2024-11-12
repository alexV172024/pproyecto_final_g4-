<?php namespace App\Models;

use CodeIgniter\Model;

class VentasModel extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'venta_id';
    protected $allowedFields = ['cliente_id', 'videojuego_id', 'fecha_venta', 'cantidad', 'usuario_id']; 
}
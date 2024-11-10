<?php namespace App\Models;

use CodeIgniter\Model;

class VideojuegosModel extends Model
{
    protected $table = 'videojuegos';
    protected $primaryKey = 'videojuego_id';
    protected $allowedFields = ['titulo', 'plataforma', 'genero', 'precio', 'cantidad', 'proveedor_id'];
}

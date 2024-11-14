<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table      = 'productos';  
    protected $primaryKey = 'id';      

    protected $allowedFields = ['nombre', 'marca', 'modelo', 'precio', 'stock'];  

    protected $useTimestamps = true;  
    
    public function getProductos()
    {
        return $this->findAll();  
    }
}
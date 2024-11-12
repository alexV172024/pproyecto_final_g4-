<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class VistaAdmin extends Controller
{
    public function index()
    {
        return view('vista_admin');
    }
}
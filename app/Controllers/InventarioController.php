<?php

namespace App\Controllers;


use App\Models\InventarioModel;

class InventarioController extends BaseController
{
    // Mostrar el listado de inventarios
    public function index()
    {
        $model = new InventarioModel();
        $data['inventarios'] = $model->findAll();

        return view('inventario/index', $data);
    }

    // Mostrar formulario para agregar un nuevo inventario
    public function nuevo()
    {
        return view('inventario/nuevo');
    }

    // Guardar un nuevo inventario en la base de datos
    public function guardar()
    {
        $model = new InventarioModel();

        // Aquí puedes obtener los datos del formulario si es necesario, o usarlos predeterminados
        $data = [
            'accesorio' => $this->request->getPost('accesorio'),  // Suponiendo que recibes un accesorio
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'fecha_ingreso' => date('Y-m-d H:i:s')
        ];

        // Guardar los datos en la base de datos
        $model->save($data);

        // Redirigir de nuevo al listado de inventarios
        return redirect()->to('/inventario');
    }
}

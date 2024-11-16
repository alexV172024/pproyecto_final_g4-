<?php

namespace App\Controllers;

use App\Models\InventarioModel;

class InventarioController extends BaseController
{
    public function index()
    {
        $model = new InventarioModel();
        $searchQuery = $this->request->getGet('search');

        if (!empty($searchQuery)) {
            $data['inventario'] = $model->like('accesorio_id', $searchQuery)
                                      ->orLike('precio', $searchQuery)
                                      ->orLike('inventario_id', $searchQuery)
                                      ->paginate(5);
        } else {
            $data['inventario'] = $model->paginate(5);
        }

        $data['pager'] = $model->pager;
        $data['search'] = $searchQuery;

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

        // Obtener los datos del formulario y asegurarse de que el campo fecha_ingreso esté correctamente asignado
        $data = [
            'accesorio' => $this->request->getPost('accesorio'),  
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'fecha_ingreso' => date('Y-m-d H:i:s') // Fecha de ingreso actual
        ];

        // Guardar los datos en la base de datos
        $model->save($data);

        // Redirigir de nuevo al listado de inventarios
        return redirect()->to('/inventario');
    }

    // Mostrar formulario para editar inventario
    public function edit($id)
    {
        $model = new InventarioModel();
        $inventario = $model->find($id);
        
        // Verificar si el inventario existe
        if (!$inventario) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Inventario no encontrado');
        }
    
        $data['inventario'] = $inventario;
        return view('inventario/edit', $data);
    }
    
    // Actualizar inventario
    public function update($id)
    {
        $model = new InventarioModel();

        // Recuperar los datos del formulario y asegurarse de que 'fecha_ingreso' no sea modificado
        $data = [
            'accesorio_id' => $this->request->getPost('accesorio_id'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio' => $this->request->getPost('precio'),
            'ubicacion' => $this->request->getPost('ubicacion')
            
        ];

        // Verificar si se está enviando una fecha de ingreso, si no, no la actualizamos
        if ($this->request->getPost('fecha_ingreso')) {
            $data['fecha_ingreso'] = $this->request->getPost('fecha_ingreso');
        }

        // Actualizar los datos del inventario en la base de datos
        $model->update($id, $data);

        // Redirigir al listado de inventarios
        return redirect()->to('/inventario');
    }
}

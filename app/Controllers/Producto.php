<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function show($id)
    {
        $productoModel = new ProductoModel();
        echo view ('producto/show',[
            'producto' => $productoModel->find($id)
        ]);
    }

    public function create()
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        $productoModel->insert([
            'codprod_id' => $this->request->getPost('codprod_id'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'categoria_producto' => $this->request->getPost('categoria_producto'),
            'precio_producto' => $this->request->getPost('precio_producto'),
            'cantidad_producto' => $this->request->getPost('cantidad_producto'),
        ]);
        echo 'creado';
    }

    public function new()
    {
        echo view('producto/new',[
            'producto'=> [
            'codprod_id' => '',
            'nombre_producto' => '',
            'descripcion_producto' => '',
            'categoria_producto' => '',
            'precio_producto' => '',
            'cantidad_producto' => '',
            ]
        ]);
    }

    public function edit($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        $productoModel = new ProductoModel();
        echo view ('producto/edit',[
            'producto' => $productoModel->find($id)
        ]);
    }

    public function update($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        $productoModel->update($id,[
            'codprod_id' => $this->request->getPost('codprod_id'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'categoria_producto' => $this->request->getPost('categoria_producto'),
            'precio_producto' => $this->request->getPost('precio_producto'),
            'cantidad_producto' => $this->request->getPost('cantidad_producto'),
        ]);
        echo 'update';
    }

    public function delete($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        $productoModel->delete($id);
        echo 'delete';
    }


    public function index()
    {
        $productoModel = new ProductoModel();
        
        echo view ('producto/index', [
            'productos' => $productoModel->findAll(),
        ]);
    }
    
}

<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function show($id)
    {
        $productoModel = new ProductoModel();
        echo view ('dashboard/producto/show',[
            'producto' => $productoModel->find($id)
        ]);
    }

    public function create()
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        if($this->validate('productos')){
        $productoModel->insert([
            'codprod_id' => $this->request->getPost('codprod_id'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'categoria_producto' => $this->request->getPost('categoria_producto'),
            'precio_producto' => $this->request->getPost('precio_producto'),
            'cantidad_producto' => $this->request->getPost('cantidad_producto'),
        ]);
    }else{
        session()->setFlashdata([
            'validation' => $this->validator 
        ]);
        return redirect()->back()->withInput();
    }
        return redirect()->to('/dashboard/producto')->with('mensaje','Producto creado de manera correcta');
    }

    public function new()
    {
        echo view ('dashboard/producto/new',[
            'producto'=> new ProductoModel()
        ]);
    }

    public function edit($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        echo view ('dashboard/producto/edit',[
            'producto' => $productoModel->find($id)
        ]);
    }

    public function update($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        if($this->validate('productos')){
        $productoModel->update($id,[
            'codprod_id' => $this->request->getPost('codprod_id'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'descripcion_producto' => $this->request->getPost('descripcion_producto'),
            'categoria_producto' => $this->request->getPost('categoria_producto'),
            'precio_producto' => $this->request->getPost('precio_producto'),
            'cantidad_producto' => $this->request->getPost('cantidad_producto'),
        ]);
    }else{
        session()->setFlashdata([
            'validation' => $this->validator 
        ]);
        return redirect()->back()->withInput();
    }
        return redirect()->to('/dashboard/producto')->with('mensaje','Producto editado de manera correcta');
    }

    public function delete($id)
    {
        //echo view('producto/new');
        $productoModel = new ProductoModel();
        $productoModel->delete($id);
        session()->setFlashdata('mensaje','Producto Eliminado con éxito');
        return redirect()->back();
        //return redirect()->to('/dashboard/producto')->with('mensaje','Producto eliminado de manera correcta');
    }


    public function index()
    {
        $productoModel = new ProductoModel();
        
        echo view ('dashboard/producto/index', [
            'productos' => $productoModel->findAll(),
        ]);
    }
    
}

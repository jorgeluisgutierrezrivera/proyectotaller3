<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function show($id)
    {
        $clienteModel = new ClienteModel();
        echo view ('dashboard/cliente/show',[
            'cliente' => $clienteModel->find($id)
        ]);
    }

    public function create()
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        if($this->validate('clientes')){
        $clienteModel->insert([
            'cicli_id' => $this->request->getPost('cicli_id'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'apellido_cliente' => $this->request->getPost('apellido_cliente'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'celular_cliente' => $this->request->getPost('celular_cliente'),
            'correo_cliente' => $this->request->getPost('correo_cliente'),
        ]);
    }else{
        session()->setFlashdata([
            'validation' => $this->validator 
        ]);
        return redirect()->back()->withInput();
    }

        return redirect()->to('/dashboard/cliente')->with('mensaje','Cliente creado de manera correcta');
    }

    public function new()
    {
        echo view ('dashboard/cliente/new',[
            'cliente'=> [
            'cicli_id' => '',
            'nombre_cliente' => '',
            'apellido_cliente' => '',
            'direccion_cliente' => '',
            'celular_cliente' => '',
            'correo_cliente' => '',
            ]
        ]);
    }

    public function edit($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        echo view ('dashboard/cliente/edit',[
            'cliente' => $clienteModel->find($id)
        ]);
    }

    public function update($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();

        if($this->validate('clientes')){
            $clienteModel->update($id,[
                'cicli_id' => $this->request->getPost('cicli_id'),
                'nombre_cliente' => $this->request->getPost('nombre_cliente'),
                'apellido_cliente' => $this->request->getPost('apellido_cliente'),
                'direccion_cliente' => $this->request->getPost('direccion_cliente'),
                'celular_cliente' => $this->request->getPost('celular_cliente'),
                'correo_cliente' => $this->request->getPost('correo_cliente'),
            ]);
        }else{
            session()->setFlashdata([
                'validation' => $this->validator 
            ]);
            return redirect()->back()->withInput();
        }

        
        return redirect()->to('/dashboard/cliente')->with('mensaje','Cliente editado de manera correcta');
    }

    public function delete($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        $clienteModel->delete($id);
        session()->setFlashdata('mensaje','Cliente eliminado con éxito');
        return redirect()->back();
        //return redirect()->to('/dashboard/cliente');
    }


    public function index()
    {
        $clienteModel = new ClienteModel();
        
        echo view ('dashboard/cliente/index', [
            'clientes' => $clienteModel->findAll(),
        ]);
    }
    
}

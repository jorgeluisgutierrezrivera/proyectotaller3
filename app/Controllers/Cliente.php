<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function show($id)
    {
        $clienteModel = new ClienteModel();
        echo view ('cliente/show',[
            'cliente' => $clienteModel->find($id)
        ]);
    }

    public function create()
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        $clienteModel->insert([
            'cicli_id' => $this->request->getPost('cicli_id'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'apellido_cliente' => $this->request->getPost('apellido_cliente'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'celular_cliente' => $this->request->getPost('celular_cliente'),
            'correo_cliente' => $this->request->getPost('correo_cliente'),
        ]);
        echo 'creado';
    }

    public function new()
    {
        echo view('cliente/new',[
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
        $clienteModel = new ClienteModel();
        echo view ('cliente/edit',[
            'cliente' => $clienteModel->find($id)
        ]);
    }

    public function update($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        $clienteModel->update($id,[
            'cicli_id' => $this->request->getPost('cicli_id'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'apellido_cliente' => $this->request->getPost('apellido_cliente'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'celular_cliente' => $this->request->getPost('celular_cliente'),
            'correo_cliente' => $this->request->getPost('correo_cliente'),
        ]);
        echo 'update';
    }

    public function delete($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        $clienteModel->delete($id);
        echo 'delete';
    }


    public function index()
    {
        $clienteModel = new ClienteModel();
        
        echo view ('cliente/index', [
            'clientes' => $clienteModel->findAll(),
        ]);
    }
    
}

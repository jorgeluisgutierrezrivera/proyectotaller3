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
        $clienteModel->insert([
            'cicli_id' => $this->request->getPost('cicli_id'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'apellido_cliente' => $this->request->getPost('apellido_cliente'),
            'direccion_cliente' => $this->request->getPost('direccion_cliente'),
            'celular_cliente' => $this->request->getPost('celular_cliente'),
            'correo_cliente' => $this->request->getPost('correo_cliente'),
        ]);
        return redirect()->to('/dashboard/cliente');
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
        $clienteModel = new ClienteModel();
        echo view ('dashboard/cliente/edit',[
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
        return redirect()->to('/dashboard/cliente');
    }

    public function delete($id)
    {
        //echo view('cliente/new');
        $clienteModel = new ClienteModel();
        $clienteModel->delete($id);
        return redirect()->to('/dashboard/cliente');
    }


    public function index()
    {
        $clienteModel = new ClienteModel();
        
        echo view ('dashboard/cliente/index', [
            'clientes' => $clienteModel->findAll(),
        ]);
    }
    
}

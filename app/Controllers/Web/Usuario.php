<?php

namespace App\Controllers\Web;
use App\Models\UsuarioModel;
use App\Controllers\BaseController;

class Usuario extends BaseController
{
    
    public function crear_usuario()
    {
        $usuarioModel = new UsuarioModel();
    
        $usuarioModel->insert(
            [
                'ciusu_id' => '7174550',
                'nombre_usuario' => 'Jorge',
                'apellido_usuario' => 'Gutiérrez',
                'direccion_usuario' => 'Barrio Luis Espinal',
                'correo_usuario' => 'jorge@gmail.com',
                'telefono_usuario' => '75121544',
                'contrasena_usuario' => $usuarioModel->contrasenaHash('jorge1234'),
            ]
        );
    }
    
    public function probar_contrasena()
    {
        $usuarioModel = new UsuarioModel();
        var_dump($usuarioModel->contrasenaVerificar('jorge1234', '$2y$10$chgjJvKrjabiDhHAMzwnsucluIBL5AK8L1yMwM6x704U8NDa/ES7K'));
    }

    public function login(){
        echo view ('web/usuario/login');
    }

    public function login_post(){
        $usuarioModel = new UsuarioModel();
        
        $correo = $this->request->getPost('correo_usuario');
        $contrasena = $this->request->getPost('contrasena_usuario');

        $usuario = $usuarioModel->select('ciusu_id,nombre_usuario,apellido_usuario,direccion_usuario,correo_usuario,contrasena_usuario,telefono_usuario,contrasena_usuario,tipo_usuario')
        ->orwhere('correo_usuario',$correo)
        ->orwhere('nombre_usuario',$correo)
        ->first();

        if(!$usuario){
            return redirect()->back()->with('mensaje', 'Usuario y/contraseña invalido');

        }
        if($usuarioModel->contrasenaVerificar($contrasena,$usuario->contrasena_usuario)){
            unset($usuario->contrasena_usuario);
            session()->set('correo_usuario',$usuario);

            return redirect()->to('dashboard/cliente')->with('mensaje', "Bienvenid@ $usuario->nombre_usuario");
        }
        return redirect()->back()->with('mensaje', 'Usuario y/contraseña invalido');
    }

    public function register(){
        echo view ('web/usuario/register');
    }

    public function register_post(){
        $usuarioModel = new UsuarioModel();

        if($this->validate('usuarios')){
            $usuarioModel->insert([
                'ciusu_id' => $this->request->getPost('ciusu_id'),
                'nombre_usuario' => $this->request->getPost('nombre_usuario'),
                'apellido_usuario' => $this->request->getPost('apellido_usuario'),
                'direccion_usuario' => $this->request->getPost('direccion_usuario'),
                'correo_usuario' => $this->request->getPost('correo_usuario'),
                'telefono_usuario' => $this->request->getPost('telefono_usuario'),
                'contrasena_usuario' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena_usuario')),
                
            ]);
            return redirect()->to(route_to('usuario.login'))->with('mensaje', "Registro Exitoso");
        }
        session()->setFlashdata([
            'validation' => $this->validator 
        ]);
        return redirect()->back()->withInput();
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(route_to('usuario.login'));
    }

}
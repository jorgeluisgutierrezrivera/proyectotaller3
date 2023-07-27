<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardFilter implements FilterInterface
{
   
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('correo_usuario')) {
            return redirect()->to(route_to('usuario.login'));
        }

        if (session()->get('correo_usuario')->tipo_usuario != 'admin') {
            return redirect()->to(route_to('usuario.login'));
        }
    }

   
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}

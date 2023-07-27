<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('dashboard',function($routes){
    $routes->presenter('cliente',['controller'=>'Dashboard\Cliente']);
    $routes->presenter('producto',['controller'=>'Dashboard\Producto']);
    //$routes->presenter('usuario',['controller'=>'Web\Usuario']);
    //$routes->get('usuario/creacion','Web\Usuario::crear_usuario');
    //$routes->get('usuario/probar/contrasena','Web\Usuario::probar_contrasena');
});

$routes->get('login','Web\Usuario::login',['as'=>'usuario.login']);
$routes->post('login_post','Web\Usuario::login_post',['as'=>'usuario.login_post']);
$routes->get('register','Web\Usuario::register',['as'=>'usuario.register']);
$routes->post('register_post','Web\Usuario::register_post',['as'=>'usuario.register_post']);
$routes->get('logout','Web\Usuario::logout',['as'=>'usuario.logout']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

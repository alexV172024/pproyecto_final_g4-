<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController'); // Controlador predeterminado
$routes->setDefaultMethod('index'); // Método predeterminado
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Ruta para la vista de inicio de sesión
$routes->get('/', 'LoginController::index'); // Página de inicio de sesión

// Ruta para procesar el inicio de sesión
$routes->post('/login', 'LoginController::login'); 

// Ruta para el menú principal (cuando el usuario haya iniciado sesión)
$routes->get('/menu', 'LoginController::menu'); 

// Ruta para la vista de registro de usuario
$routes->get('/registro_usuario', 'LoginController::registro_usuario');

// Ruta para la vista de tienda
$routes->get('/tienda', 'MenuController::tienda');

// Ruta para la vista de ubicación
$routes->get('/ubicacion', 'MenuController::ubicacion');

// Ruta para la vista de contacto
$routes->get('/contacto', 'MenuController::contacto');

// Rutas para Proveedores
    $routes->get('proveedores', 'ProveedoresController::index');
    $routes->get('proveedores/create', 'ProveedoresController::create');
    $routes->post('proveedores/store', 'ProveedoresController::store');
    $routes->get('proveedores/edit/(:num)', 'ProveedoresController::edit/$1');
    $routes->post('proveedores/update/(:num)', 'ProveedoresController::update/$1');
    $routes->get('proveedores/delete/(:num)', 'ProveedoresController::delete/$1');

    // Rutas para Videojuegos
    $routes->get('videojuegos', 'VideojuegosController::index');
    $routes->get('videojuegos/create', 'VideojuegosController::create');
    $routes->post('videojuegos/store', 'VideojuegosController::store');
    $routes->get('videojuegos/edit/(:num)', 'VideojuegosController::edit/$1');
    $routes->post('videojuegos/update/(:num)', 'VideojuegosController::update/$1');
    $routes->get('videojuegos/delete/(:num)', 'VideojuegosController::delete/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

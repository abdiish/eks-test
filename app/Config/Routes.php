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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

// Ruta -> Obtener lista de de autores 
$routes->get('GetAuthors', 'Authors::index');

// Ruta -> Crear un nuevo autor,manda a formulario 
$routes->get('CreateAuthor', 'Authors::create');

// Ruta -> Guardar información de formulario
$routes->post('save', 'Authors::save');

// Ruta -> Eliminar registro(autor)
$routes->get('delete/(:num)', 'Authors::delete/$1');

// Ruta -> Editar registro(autor), manda a formulario
$routes->get('update/(:num)', 'Authors::update/$1');

// Ruta -> Actualizar información
$routes->post('updateAuthor', 'Authors::updateAuthor');

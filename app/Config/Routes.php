<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Usuarios');
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
$routes->get('/', 'Usuarios::login');
$routes->get('unidades', 'Unidades::index');
$routes->get('categorias', 'Categorias::index');
$routes->get('productos', 'Productos::index');
$routes->get('clientes', 'Clientes::index');
$routes->get('configuracion', 'Configuracion::index');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('compras', 'Compras::index');
$routes->get('ventas', 'Ventas::index');
$routes->get('inicio', 'Inicio::index');
$routes->get('roles', 'Roles::index');
$routes->get('cajas', 'Cajas::index');

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

$routes->get('unidades/nuevo', 'Unidades::nuevo');
$routes->post('unidades/insertar', 'Unidades::insertar');
$routes->get('unidades/editar/(:num)', 'Unidades::editar/$1');
$routes->post('unidades/actualizar', 'Unidades::actualizar');
$routes->get('unidades/eliminar/(:num)', 'Unidades::eliminar/$1');
$routes->get('unidades/eliminados', 'Unidades::eliminados');
$routes->get('unidades/reingresar/(:num)', 'Unidades::reingresar/$1');

$routes->get('categorias/nuevo', 'Categorias::nuevo');
$routes->post('categorias/insertar', 'Categorias::insertar');
$routes->get('categorias/editar/(:num)', 'Categorias::editar/$1');
$routes->post('categorias/actualizar', 'Categorias::actualizar');
$routes->get('categorias/eliminar/(:num)', 'Categorias::eliminar/$1');
$routes->get('categorias/eliminados', 'Categorias::eliminados');
$routes->get('categorias/reingresar/(:num)', 'Categorias::reingresar/$1');

$routes->get('productos/nuevo', 'Productos::nuevo');
$routes->post('productos/insertar', 'Productos::insertar');
$routes->get('productos/editar/(:num)', 'Productos::editar/$1');
$routes->post('productos/actualizar', 'Productos::actualizar');
$routes->get('productos/eliminar/(:num)', 'Productos::eliminar/$1');
$routes->get('productos/eliminados', 'Productos::eliminados');
$routes->get('productos/reingresar/(:num)', 'Productos::reingresar/$1');
$routes->get('productos/buscarPorCodigo/(:any)', 'Productos::buscarPorCodigo/$1');

$routes->get('clientes/nuevo', 'Clientes::nuevo');
$routes->post('clientes/insertar', 'Clientes::insertar');
$routes->get('clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->post('clientes/actualizar', 'Clientes::actualizar');
$routes->get('clientes/eliminar/(:num)', 'Clientes::eliminar/$1');
$routes->get('clientes/eliminados', 'Clientes::eliminados');
$routes->get('clientes/reingresar/(:num)', 'Clientes::reingresar/$1');

$routes->post('configuracion/actualizar', 'Configuracion::actualizar');

$routes->get('usuarios/nuevo', 'Usuarios::nuevo');
$routes->post('usuarios/insertar', 'Usuarios::insertar');
$routes->get('usuarios/editar/(:num)', 'Usuarios::editar/$1');
$routes->post('usuarios/actualizar', 'Usuarios::actualizar');
$routes->get('usuarios/eliminar/(:num)', 'Usuarios::eliminar/$1');
$routes->get('usuarios/eliminados', 'Usuarios::eliminados');
$routes->get('usuarios/reingresar/(:num)', 'Usuarios::reingresar/$1');
$routes->post('usuarios/valida', 'Usuarios::valida');
$routes->get('usuarios/logout', 'Usuarios::logout');
$routes->get('usuarios/cambia_password', 'Usuarios::cambia_password');
$routes->post('usuarios/actualizar_password', 'Usuarios::actualizar_password');

$routes->get('compras/nuevo', 'Compras::nuevo');
$routes->get('TemporalCompra/inserta/(:num)/(:num)/(:any)', 'TemporalCompra::inserta/$1/$2/$3');
$routes->get('TemporalCompra/eliminar/(:num)/(:any)', 'TemporalCompra::eliminar/$1/$2');
$routes->post('compras/guarda', 'Compras::guarda');
$routes->get('compras/muestraCompraPdf/(:num)', 'Compras::muestraCompraPdf/$1');
$routes->get('compras/generaCompraPdf/(:num)', 'Compras::generaCompraPdf/$1');


$routes->get('ventas/venta', 'Ventas::venta');
$routes->post('ventas/guarda', 'Ventas::guarda');
$routes->get('ventas/muestraTicket/(:num)', 'Ventas::muestraTicket/$1');
$routes->get('ventas/generaTicket/(:num)', 'Ventas::generaTicket/$1');
$routes->get('ventas/eliminar/(:num)', 'Ventas::eliminar/$1');
$routes->get('ventas/eliminados', 'Ventas::eliminados');

$routes->get('clientes/autocompleteData', 'Clientes::autocompleteData');
$routes->get('productos/autocompleteData', 'Productos::autocompleteData');
$routes->get('productos/generaBarras', 'Productos::generaBarras');
$routes->get('productos/muestraCodigos', 'Productos::muestraCodigos');
$routes->get('productos/mostrarMinimos', 'Productos::mostrarMinimos');
$routes->get('productos/generaMinimosPdf', 'Productos::generaMinimosPdf');

$routes->get('roles/nuevo', 'Roles::nuevo');
$routes->post('roles/insertar', 'Roles::insertar');
$routes->get('roles/editar/(:num)', 'Roles::editar/$1');
$routes->post('roles/actualizar', 'Roles::actualizar');
$routes->get('roles/eliminar/(:num)', 'Roles::eliminar/$1');
$routes->get('roles/eliminados', 'Roles::eliminados');
$routes->get('roles/reingresar/(:num)', 'Roles::reingresar/$1');
$routes->get('roles/detalles/(:num)', 'Roles::detalles/$1');
$routes->post('roles/guardaPermisos', 'Roles::guardaPermisos');

$routes->get('cajas/nuevo', 'Cajas::nuevo');
$routes->post('cajas/insertar', 'Cajas::insertar');
$routes->get('cajas/editar/(:num)', 'Cajas::editar/$1');
$routes->post('cajas/actualizar', 'Cajas::actualizar');
$routes->get('cajas/eliminar/(:num)', 'Cajas::eliminar/$1');
$routes->get('cajas/eliminados', 'Cajas::eliminados');
$routes->get('cajas/reingresar/(:num)', 'Cajas::reingresar/$1');
$routes->get('cajas/arqueo/(:num)', 'Cajas::arqueo/$1');
$routes->get('cajas/nuevo_arqueo', 'Cajas::nuevo_arqueo');
$routes->post('cajas/nuevo_arqueo', 'Cajas::nuevo_arqueo');
$routes->get('cajas/cerrar/(:num)', 'Cajas::cerrar/$1');
$routes->post('cajas/cerrar', 'Cajas::cerrar');

$routes->get('factura/facturar/(:num)', 'Factura::facturar/$1');
$routes->get('factura/generaPdf/(:any)', 'Factura::generaPdf/$1');

$routes->get('inicio/excel', 'Inicio::excel');
$routes->get('productos/mostrarMinimosExcel', 'Productos::mostrarMinimosExcel');

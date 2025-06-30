<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');

$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

$routes->get('/login', 'Home::login');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/logueado', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

$routes->get('/vista', 'usuario_crud_controller::index', ['filter' => 'auth']);
$routes->get('/usuario-form', 'usuario_crud_controller::create', ['filter' => 'auth']);
$routes->post('/enviar-usuario', 'usuario_crud_controller::store', ['filter' => 'auth']);
$routes->post('/update', 'usuario_crud_controller::update');
$routes->get('editar-usuario/(:num)', 'usuario_crud_controller::singleUser/$1', ['filter' => 'auth']);
$routes->get('borrar_usuario/(:num)', 'usuario_crud_controller::deletelogico/$1', ['filter' => 'auth']);
$routes->get('/activar_usuario/(:num)', 'usuario_crud_controller::activar/$1', ['filter' => 'auth']);
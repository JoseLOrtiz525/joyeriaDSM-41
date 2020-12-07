<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('templates.index');
});

Route::name('login')->get('login/', 'SistemController@login');

Route::name('registrarse')->get('registrarse/', 'SistemController@registrarse');

Route::name('iniciar_sesion')->get('iniciar_sesion/', 'SistemController@iniciar_sesion');

Route::name('home')->get('home/', 'SistemController@home');

Route::name('usuarios')->get('usuarios/', 'SistemController@usuarios');

Route::name('guardar')->post('guardar/', 'SistemController@guardar');

Route::name('guardarProductos')->post('guardarProductos/', 'SistemController@guardarProductos');

Route::name('elements')->get('elements/', 'SistemController@elements');

Route::name('productos')->get('productos/', 'SistemController@productos');

Route::name('catalogo')->get('catalogo/', 'SistemController@catalogo');

Route::name('validar')->post('validar/', 'LoginController@validar');

Route::name('logout')->get('logout/', 'LoginController@logout');

Route::name('registrarProductos')->get('registrarProductos/', 'SistemController@registrarProductos');

Route::name('carrito')->get('carrito/', 'SistemController@carrito');

Route::name('addCarrito')->get('addCarrito/{id?}', 'SistemController@addCarrito');

Route::get('/paypal/pay', 'PaymentController@payWithPayPal');

Route::get('/paypal/status', 'PaymentController@payPalStatus');

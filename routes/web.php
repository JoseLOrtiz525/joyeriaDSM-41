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

Route::name('iniciar_sesion')->get('iniciar_sesion/', 'SistemController@iniciar_sesion');

Route::name('home')->get('home/', 'SistemController@home');

Route::name('elements')->get('elements/', 'SistemController@elements');

Route::name('catalogo')->get('catalogo/', 'SistemController@catalogo');

Route::name('validar')->post('validar/', 'LoginController@validar');

Route::name('logout')->get('logout/', 'LoginController@logout');

//rutas de paypal
Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');

//-------------------------------------------Usuarios--------------------------------------------------------------

Route::name('usuarios')->get('usuarios/', 'SistemController@usuarios');

Route::name('guardar')->post('guardar/', 'SistemController@guardar');
Route::name('registrarse')->get('registrarse/', 'SistemController@registrarse');

Route::name('modificar')->get('modificar/{id}', 'SistemController@modificar');
Route::name('salvar')->put('salvar/{id}', 'SistemController@salvar');

Route::name('borrar')->get('borrar/{id}', 'SistemController@borrar');


//-------------------------------------------Productos--------------------------------------------------------------

Route::name('productos')->get('productos/', 'SistemController@productos');

Route::name('guardarProductos')->post('guardarProductos/', 'SistemController@guardarProductos');
Route::name('registrarProductos')->get('registrarProductos/', 'SistemController@registrarProductos');

Route::name('modificarProductos')->get('modificarProductos/{id}', 'SistemController@modificarProductos');
Route::name('salvarProductos')->put('salvarProductos/{id}', 'SistemController@salvarProductos');

Route::name('borrarProducto')->get('borrarProducto/{id}', 'SistemController@borrarProducto');


//-------------------------------------------Ventas--------------------------------------------------------------
Route::name('ventas')->get('ventas/', 'CRUDController@ventas');
Route::name('guardarVentas')->post('guardarVentas/', 'CRUDController@guardarVentas');
Route::name('registrarVentas')->get('registrarVentas/', 'CRUDController@registrarVentas');

Route::name('modificarVentas')->get('modificarVentas/{id}', 'CRUDController@modificarVentas');
Route::name('salvarVentas')->put('salvarVentas/{id}', 'CRUDController@salvarVentas');

Route::name('borrarVenta')->get('borrarVenta/{id}', 'CRUDController@borrarVenta');

//-------------------------------------------Materiales--------------------------------------------------------------
Route::name('materiales')->get('materiales/', 'CRUDController@materiales');
Route::name('guardarMateriales')->post('guardarMateriales/', 'CRUDController@guardarMateriales');
Route::name('registrarMateriales')->get('registrarMateriales/', 'CRUDController@registrarMateriales');

Route::name('modificarMateriales')->get('modificarMateriales/{id}', 'CRUDController@modificarMateriales');
Route::name('salvarMateriales')->put('salvarMateriales/{id}', 'CRUDController@salvarMateriales');

Route::name('borrarMaterial')->get('borrarMaterial/{id}', 'CRUDController@borrarMaterial');
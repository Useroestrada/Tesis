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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('empresas', 'EmpresaController');



Route::resource('departamentos', 'DepartamentoController');



Route::resource('cargos', 'CargoController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('marcaProveedors', 'MarcaProveedorController');

Route::resource('tipoProductos', 'TipoProductoController');



Route::resource('productos', 'ProductoController');





Route::resource('prestamos', 'PrestamoController');
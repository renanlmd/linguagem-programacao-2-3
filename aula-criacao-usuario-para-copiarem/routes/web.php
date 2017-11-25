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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('lista-usuarios', 'UsuariosController@listaUsuario');
Route::get('cria-usuario', 'UsuariosController@formularioUsuario');
Route::post('salva-usuario', 'UsuariosController@salvarUsuario');
Route::put('altera-usuario/{id}', 'UsuariosController@alteraUsuario');
Route::get('editar-usuario/{id}', 'UsuariosController@editarUsuario');
Route::delete('deletar-usuario/{id}', 'UsuariosController@deletarUsuario');
// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categorias', 'CategoriasController');
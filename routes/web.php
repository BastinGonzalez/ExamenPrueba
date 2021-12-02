<?php

use App\Http\Livewire\Libros\CreateLibro;
use App\Http\Livewire\Libros\DeleteLibro;
use App\Http\Livewire\Libros\EditLibro;
use App\Http\Livewire\Libros\IndexLibros;
use App\Http\Livewire\Libros\ShowLibro;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use Illuminate\Support\Facades\Route;

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
// RUTAS DE LIBROS
Route::get('/', IndexLibros::class)->name("indexLibros");
Route::get('/libros', IndexLibros::class)->name("indexLibros");
Route::get('/libros/create', CreateLibro::class)->name("createLibros");
Route::get('/libros/{libro}/edit', EditLibro::class)->name('editLibros');
Route::get('/libros/{libro}/show', ShowLibro::class)->name('showLibros');
Route::get('/libros/{libro}/delete', DeleteLibro::class)->name('deleteLibros');

//RUTAS DE USUARIOS
Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");
Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");

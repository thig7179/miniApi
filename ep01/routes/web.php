<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Form\MyController;

Route::resource('users',MyController::class);

//Route::get('listagem-usuario', [UserController::class, 'listUser']);
/*Route::get('usuario', [MyController::class, 'listUserAll'])->name('users.listAll');
Route::get('usuario/novo', [MyController::class, 'formUser'])->name('users.formUser');
Route::get('usuario/editar/{usuario}', [MyController::class, 'formEdit'])->name('users.formEdit');
Route::get('usuario/{usuario}', [MyController::class, 'listUsuario'])->name('users.list');

Route::post('usuario/store', [MyController::class, 'storeUser'] )->name('users.store');

Route::put('usuario/edit/{usuario}',[MyController::class, 'edit'] )->name('users.edit');*/


use App\Http\Controllers\ProductController;

Route::resource('products',ProductController::class);

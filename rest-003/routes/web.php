<?php

use App\Http\Controllers\Form\TesteController;
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


Route::get('/users', [TesteController::class, 'listAllUsers'])->name('users.listAll');
Route::get('/users/new', [TesteController::class, 'formAddUser'])->name('users.formAddUser');
Route::get('/users/editar/{user}', [TesteController::class, 'formEditUser'])->name('users.formEditUser');
Route::get('/users/{user}', [TesteController::class, 'listUser'])->name('users.list');
Route::post('/user/store', [TesteController::class, 'storeUser'])->name('user.store');
Route::put('/users/edit/{user}', [TesteController::class, 'edit'])->name('user.edit');
Route::delete('/users/destroy/{user}', [TesteController::class, 'destroy'], 'destroy')->name('user.destroy');
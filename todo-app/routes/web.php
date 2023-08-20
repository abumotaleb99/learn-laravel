<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::post('/todo/add', [TodoController::class, 'saveTodo'])->name('add-todo');
Route::get('/todo/edit/{id}', [TodoController::class, 'editTodo'])->name('edit-todo');
Route::post('/todo/update', [TodoController::class, 'updateTodo'])->name('update-todo');




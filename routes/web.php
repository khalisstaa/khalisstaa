<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController; // Import the controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    return view('home');
});

Route::get('/menu', [MenuController::class, 'index']); 
Route::get('/menu/tambah', [MenuController::class, 'tambah']);
Route::post('/foods/store', [MenuController::class, 'store']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/menu/update/{id}', [MenuController::class, 'update']);
Route::get('/menu/hapus/{id}', [MenuController::class, 'hapus']);




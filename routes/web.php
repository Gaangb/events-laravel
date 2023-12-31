<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/contato', [EventController::class, 'contact']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

// Route::get('/produtos', function () {
//     $busca = request('search');

//     return view('products', ['busca' => $busca]);
// });

// Route::get('/produto/{id?}', function ($id = 1) {
//     return view('product', ['id' => $id]);
// });



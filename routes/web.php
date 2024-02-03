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

Route::get('/', function()
{
    return view('Welcome');
});

// Route::get('/', 'App\Http\Controllers\InicioController@index' );
Route::resource('worker','App\Http\Controllers\WorkerController');
Route::resource('worker/edit','App\Http\Controllers\WorkerController');

//          route to worker CRUD controller
// $router->get('/worker', 'App\Http\Controllers\WorkerController@index');
// $router->post('/worker', 'App\Http\Controllers\WorkerController@store');
// $router->get('/worker/{id}', 'App\Http\Controllers\WorkerController@show');
// $router->put('/worker/{id}', 'App\Http\Controllers\WorkerController@update');
// $router->delete('/worker/{id}', 'App\Http\Controllers\WorkerController@destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

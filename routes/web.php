<?php

use Illuminate\Support\Facades\Route;
//acceder a los controllers
use App\Http\Controllers\EmpleadoController;

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

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });

// Route::get('/empleado/create',[EmpleadoController::class,'create']);

//hacer todas las solicitudes
//php artisan route:list -> aqui veremos todas las rutas del controlador

Route::resource('empleado', EmpleadoController::class);


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/wellcome', function () {
    return response()->json([
        'message' => 'Bienvenido a la API',
    ]); // Ruta principal
});

Route::get('/dashboard', function () {
    return response()->json([
        'message' => 'Bienvenido al Dashboard',
    ]); // Ruta principal
});

Route::get('/balance', function () {
    return response()->json([
        'message' => 'Saldo del usuario',
    ]); // Ruta principal
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

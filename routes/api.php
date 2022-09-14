<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function(){
    $store = env("STORE_ALIAS")." => ".env("STORE_ID");
    return response()->json(["resp"=>"Ness is running ($store)"]);
});


Route::middleware('krakenShield')->group(function(){

    Route::prefix('/users')
        ->middleware('usersShield')
        ->controller('UsersController')
        ->group(function() {

            Route::get('/', 'list'); // metodo para listar los usuarios de la tienda
            Route::post('/', 'save'); // metodo para crear un usuario
            Route::post('/savemass', 'saveMass'); // metodo para crear de forma masiva
            Route::get('/{idornick}', 'find'); // metodo para buscar por id o nck de usuario
            Route::get('/{key}', 'autocomplete'); // metodo para autocmpletar por nombre o nick
            Route::patch('/{userid}', 'update'); // metodo para actualizar una cuenta

            Route::patch('/sync/{mode}', 'sync'); // metodo para sincronizar usuarios (upload or download)
    });

});

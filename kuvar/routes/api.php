<?php


use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ReceptController;
use App\Http\Controllers\ReceptTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VrstaController;
use App\Http\Controllers\ZemljaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('recepts/{id}',[ReceptTestController::class,'show']);
//Route::get('recepts',[ReceptTestController::class,'index']);
Route::resource('recepts', ReceptController::class);
Route::resource('vrstas', VrstaController::class);
Route::resource('zemljas', ZemljaController::class);
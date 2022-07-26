<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\MahasiswaController;
use App\Http\Controllers\api\FupController;


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

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::post('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::get('/mahasiswa/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update/{id}',[MahasiswaController::class,'store']);
Route::delete('/mahasiswa/delete',[MahasiswaController::class,'destroy']);
// Route::get('/mahasiswa',[MahasiswaController::class,'index']);

Route::get('/fup',[FupController::class,'index']);
Route::post('/create',[FupController::class,'create']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

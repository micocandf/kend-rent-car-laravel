<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebApiController;
use App\Http\Controllers\TransactionApiController;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\AuthController;

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
Route::post('/register', [AuthController::class, 'createCustomer']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/cars', [WebApiController::class, 'index']); //Data Mobil
Route::get('/cars/{id}', [WebApiController::class, 'car']); //Data Mobil

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/transaction_add', [TransactionApiController::class, 'createOnline']); //Transaksi Mobil
    Route::post('/check_out', [TransactionApiController::class, 'createOnline']); //Check out
    Route::get('/transaction_order', [TransactionApiController::class, 'OrderCar']); //Data Transaksi
    Route::get('/user', [AuthController::class, 'me']); //Data Transaksi
    Route::get('/invoice', [TransactionApiController::class, 'print_pdf_invoice']); //Invoice Transaksi
    Route::get('/logout', [AuthController::class, 'logout']);
});
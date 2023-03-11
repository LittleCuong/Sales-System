<?php

use App\Models\Customer;
use App\Models\Trademark;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\ComputerComponent;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\ClientPageController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceDetailController;

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


Route::post('/signIn', [SignInController::class, 'store']);

Route::get('/clientPage', [ClientPageController::class, 'index']);
Route::get('/user/{id}', [CustomerController::class, 'show']);

Route::get('/detail/{id}/{name}', [ProductController::class, 'showDetail']);
Route::get('/cart/product/{id}', [ProductController::class, 'showCartProduct']);

Route::get('/trademarks', [TrademarkController::class, 'index']);
Route::get('/trademark/{id}', [TrademarkController::class, 'show']);

Route::post('/add', [CartController::class, 'store']);
Route::delete('/remove/{id}', [CartController::class, 'destroy']);
Route::post('/buy', [InvoiceController::class, 'store']);
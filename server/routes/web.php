<?php

use App\Models\Customer;
use App\Models\User;
use App\Models\Category;
use App\Models\Infor;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\ComputerComponent;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\ClientPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrademarkController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

// Sign in 
// Route::post('/signIn', [SignInController::class, 'store']);

// Client
// Route::get('/clientPage', [ClientPageController::class, 'index']);

// Category
// Route::get('/trademarks', [TrademarkController::class, 'index']);
// Route::get('/trademark/{id}', [TrademarkController::class, 'show']);
// Route::get('/trademark/{id}', [TrademarkController::class, 'show']);

// Product
// Route::get('/detail/{id}/{name}', [ProductController::class, 'showDetail']);
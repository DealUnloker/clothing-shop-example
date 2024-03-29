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

Route::get('user', [\App\Http\Controllers\api\AuthController::class, 'user'])->middleware(['auth:api']);
Route::post('update_user', [\App\Http\Controllers\api\AuthController::class, 'update_user'])->middleware(['auth:api']);
Route::post('order/add', [\App\Http\Controllers\api\OrderController::class, 'addProduct'])->middleware(['auth:api']);
Route::post('login', [\App\Http\Controllers\api\AuthController::class, 'login']);
Route::post('register', [\App\Http\Controllers\api\AuthController::class, 'register']);
Route::get('products/relevant', [\App\Http\Controllers\api\ProductsController::class, 'relevant']);
Route::resource('products', \App\Http\Controllers\api\ProductsController::class);
Route::get('product_types', [\App\Http\Controllers\api\TypeController::class,  'index']);

Route::middleware(['auth:api', 'admin'])->group(function () {
    Route::get('admin/products', [\App\Http\Controllers\api\AdminPanelController::class, 'products']);
    Route::post('admin/delete_product', [\App\Http\Controllers\api\AdminPanelController::class, 'delete_product']);
    Route::get('admin/types', [\App\Http\Controllers\api\AdminPanelController::class, 'types']);
    Route::post('admin/delete_type', [\App\Http\Controllers\api\AdminPanelController::class, 'delete_type']);
    Route::get('admin/orders', [\App\Http\Controllers\api\OrderController::class, 'orders']);
    Route::post('admin/change_status', [\App\Http\Controllers\api\OrderController::class, 'change_status']);
});


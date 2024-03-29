<?php

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

Route::any('/api/v1/{any}', function () {
    return 'Wrong request';
})->where('any', '.*');
Route::get('/{any}', [\App\Http\Controllers\MainController::class, 'index'])->where('any', '.*');

<?php

use App\Http\Controllers\shortUrlController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/{uuid}', [shortUrlController::class, 'redirectTo']);

Route::prefix('short')->group(function(){
    Route::post('/insert', [shortUrlController::class, 'insertUrl']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


// Create additional Routes below
Route::get('/properties/create', [PropertiesController::class, 'create']);

Route::get('/properties',[PropertiesController::class, 'properties']);

Route::post('/properties/add',[PropertiesController::class, 'send']);

Route::get('/properties/{property_id}', [PropertiesController::class, 'property']);
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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
    return view('welcome');
});

Route::get('/data', function(){
	$users = Product::all();
	echo "<pre>"; print_r($users);
});

Route::get('/mongodb-check', function () {
    return extension_loaded('mongodb') ? 'MongoDB extension is loaded!' : 'MongoDB extension is NOT loaded!';
});










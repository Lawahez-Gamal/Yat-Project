<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mymeal;
use App\Models\customer;
use App\Models\category;
use App\Models\order;
use App\Models\contact;
use App\Models\reciepe;
// use App\Http\Controllers\ItemsController;
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

Route::get('home', function () {
    return view('backend.layout.master');
});

Route::resource('backend/meals','MymealController' );

Route::resource('backend/customers','CustomerController' );

Route::resource('backend/menus','CategoryController' );

Route::resource('backend/orders','OrderController' );

Route::resource('backend/contacts','ContactController' );

Route::resource('backend/reciepes','ReciepeController' );

Route::resource('backend/home','HomeController' );

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

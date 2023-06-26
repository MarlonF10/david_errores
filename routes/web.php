<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EmployeeController;
use  App\Http\Controllers\UtencilController;
use  App\Http\Controllers\IngredientController;
use  App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistersRecipeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SaurcerController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderneController;
use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Auth;

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


Route::resource('employees', EmployeeController::class);

Route::resource('utencils', UtencilController::class);

Route::resource('ingredients', IngredientController::class);

Route::resource('customers', CustomerController::class);

Route::resource('registers_recipes', RegistersRecipeController::class);

Route::resource('restaurants', RestaurantController::class);

Route::resource('saurcers', SaurcerController::class);

Route::resource('drinks', DrinkController::class);

Route::resource('menus', MenuController::class);

Route::resource('kitchens', KitchenController::class);

Route::resource('ordernes', OrderneController::class);

Route::resource('bills', BillController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

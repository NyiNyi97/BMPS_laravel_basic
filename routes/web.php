<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebFrontend\AboutController;
use App\Http\Controllers\WebFrontend\ProductstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'aboutPage'])->middleware('testMW');

// Controller Use
Route::get('/contact', [Controller::class, 'contactPage']);


Route::get('/products', [ProductstController::class, 'productList']);

Route::get('/promotions', [Controller::class, 'showpromotions']);


Route::get('/shop', function () {
    return view('shops.shop');
});

// Route Parameta two
Route::get('/products/{id}/shop/{shop_id}', [ProductstController::class, 'productsPage']);

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin_panel/dashboard', function () {
    return view('admin_panel.dashboard');
});

Route::get('client_side/home', function () {
    return view('client_side.home');
});

//Categories//
Route::get("admin_panel/category/create",
    [\App\Http\Controllers\Admin\CategoryController::class,"create"]);
Route::post("/admin_panel/category/store",
    [\App\Http\Controllers\Admin\CategoryController::class,"store"]);
Route::get("/admin_panel/category/index",
    [\App\Http\Controllers\Admin\CategoryController::class,"index"]);
Route::delete("/admin_panel/category/delete/{cat_id}",
    [\App\Http\Controllers\Admin\CategoryController::class,"destroy"]);
Route::get("/admin_panel/category/edit/{cat_id}",
    [\App\Http\Controllers\Admin\CategoryController::class,"edit"]);
Route::patch("/admin_panel/category/{cat_id}",
    [\App\Http\Controllers\Admin\CategoryController::class,"update"]);

//Shop HomePage
Route::get("client_side/home",
    [\App\Http\Controllers\shop\HomepageController::class,"index"]);




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

Route::get('client_side/home', function () {
    return view('client_side.home');
});

//ADMIN PREFIX STR----------------------------------------------------------
Route::prefix("admin_panel")->group(function ()
{
    //Dashboard//
    Route::get('/dashboard', function () {
        return view('admin_panel.dashboard');
    });
    //Categories//
    Route::get("/category/create",
        [\App\Http\Controllers\Admin\CategoryController::class,"create"])
        ->name("cat.create");

    Route::post("/category/store",
        [\App\Http\Controllers\Admin\CategoryController::class,"store"])
        ->name("cat.store");

    Route::get("/category/index",
        [\App\Http\Controllers\Admin\CategoryController::class,"index"])
        ->name("cat.index");

    Route::delete("/category/delete/{cat_id}",
        [\App\Http\Controllers\Admin\CategoryController::class,"destroy"])
        ->name("cat.destroy");

    Route::get("/category/edit/{cat_id}",
        [\App\Http\Controllers\Admin\CategoryController::class,"edit"])
        ->name("cat.edit");

    Route::patch("/category/{cat_id}",
        [\App\Http\Controllers\Admin\CategoryController::class,"update"])
        ->name("cat.update");
    //Brands//
    Route::get("/brand/index",
        [\App\Http\Controllers\Admin\BrandController::class,"index"])
        ->name("brand.index");

    Route::get("/brand/create",
        [\App\Http\Controllers\Admin\BrandController::class,"create"])
        ->name("brand.create");

    Route::post("/brand/store",
        [\App\Http\Controllers\Admin\BrandController::class,"store"])
        ->name("brand.store");

    Route::get("/brand/edit/{brand_id}",
        [\App\Http\Controllers\Admin\BrandController::class,"edit"])
        ->name("brand.edit");

    Route::patch("/brand/{brand_id}",
    [\App\Http\Controllers\Admin\BrandController::class,"update"])
        ->name("brand.update");

    Route::delete("/brand/delete/{brand_id}",
    [\App\Http\Controllers\Admin\BrandController::class,"destroy"])
        ->name("brand.delete");
    //Products//
    Route::get("/product/index",
    [\App\Http\Controllers\Admin\ProductController::class,"index"])
        ->name("product.index");

    Route::get("/product/create",
        [\App\Http\Controllers\Admin\ProductController::class,"create"])
        ->name("product.create");

    Route::post("/product/store",
    [\App\Http\Controllers\Admin\ProductController::class,"store"])
        ->name("product.store");

    Route::get("/product/edit/{pro_id}",
    [\App\Http\Controllers\Admin\ProductController::class,"edit"])
        ->name("product.edit");

    Route::patch("/product/update/{pro_id}",
        [\App\Http\Controllers\Admin\ProductController::class,"update"])
        ->name("product.update");

    Route::delete("/product/delete/{pro_id}",
        [\App\Http\Controllers\Admin\ProductController::class,"destroy"])
        ->name("product.delete");
}
);

//ADMIN PREFIX END----------------------------------------------------------



Route::prefix("")->group(function ()
{
        //Shop HomePage
        Route::get("client_side/home",
            [\App\Http\Controllers\shop\HomepageController::class,"index"]);

        //Product Detail
        Route::get("client_side/product_detail/show/{pro_id}",
        [\App\Http\Controllers\shop\Product_dtController::class,"show"])
            ->name('shop.product_detail.show');

}
);






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
// xyz

Route::group(['namespace' => 'App\Http\Controllers\Main','prefix' =>'shop'],function (){
    route::get('/','IndexController')->name('shop.index');

});

Route::group(['namespace' => 'App\Http\Controllers\Catalog','prefix' =>'catalog'],function (){
    route::get('/{category}','IndexController')->name('catalog.index');
    route::get('/view/{product}','ViewController')->name('product.view');
});



Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' =>'admin'],function (){
//    route::get('/','IndexController')->name('admin.index');

    route::group(['namespace' => 'Partner', 'prefix' => 'partner'],function (){
//        route::get('/','IndexController')->name('partner.index');
        route::group(['namespace' => 'Products', 'prefix' => 'product'],function (){
            Route::get('/','IndexController')->name('partner.product.index');
            Route::get('/create','CreateController')->name('partner.product.create');
            Route::post('/','StoreController')->name('partner.product.store');
            Route::get('/{product}','ShowController')->name('partner.product.show');
            Route::get('/{product}/edit','EditController')->name('partner.product.edit');
            Route::patch('/{product}','UpdateController')->name('partner.product.update');
            Route::delete('/{product}','DeleteController')->name('partner.product.delete');
        });
    });

    route::group(['namespace' => 'Moderation', 'prefix' => 'moder'],function (){
        route::get('/','IndexController')->name('moder.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





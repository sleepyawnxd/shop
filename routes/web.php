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

Route::group(['namespace' => 'App\Http\Controllers\Main','prefix' =>'shop'],function (){
    route::get('/','IndexController')->name('shop.index');

});

Route::group(['namespace' => 'App\Http\Controllers\Catalog','prefix' =>'catalog'],function (){
    route::get('/','IndexController')->name('catalog.index');
    route::get('/{product}','ViewController')->name('product.view');
});



Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' =>'admin'],function (){
    route::get('/','IndexController')->name('admin.index');

    route::group(['namespace' => 'Partner', 'prefix' => 'partner'],function (){
        route::get('/','IndexController')->name('partner.index');

        route::group(['namespace' => 'Products', 'prefix' => 'product'],function (){
            route::get('/create','CreateController')->name('create.product');
            route::post('/','StoreController')->name('store.product');

        });
    });

    route::group(['namespace' => 'Moderation', 'prefix' => 'moder'],function (){
        route::get('/','IndexController')->name('moder.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




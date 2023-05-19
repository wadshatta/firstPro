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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//this is admin route


Route::get('/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('admin.profile');

Route::group(['middleware' => 'is_admin'], function(){
    Route::get('/admin/home',[App\Http\Controllers\HomeController::class,'adminIndex'])->name('admin.home');
    Route::get('/categories',[App\Http\Controllers\CategoriesController::class,'index'])->name('admin.categories')->middleware('is_admin');

    Route::get('/addcate',[App\Http\Controllers\CategoriesController::class,'create'])->name('admin.addcate')->middleware('is_admin');
    Route::post('/store',[App\Http\Controllers\CategoriesController::class,'store'])->name('store')->middleware('is_admin');
    Route::get('/edit/{id}',[App\Http\Controllers\CategoriesController::class,'edit'])->name('edit')->middleware('is_admin');
    Route::get('/destroy/{id}',[App\Http\Controllers\CategoriesController::class,'destroy'])->name('destroy')->middleware('is_admin');

    Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('admin.products')->middleware('is_admin');
    Route::get('/addproducts',[App\Http\Controllers\ProductController::class,'create'])->name('admin.addproducts')->middleware('is_admin');
    Route::post('/product/astore',[App\Http\Controllers\ProductController::class,'store'])->name('admin.product.store')->middleware('is_admin');
    //this is profile route
    Route::get('/register/user',[App\Http\Controllers\ProfileController::class,'create'])->name('admin.register')->middleware('is_admin');
    Route::get('/register/settings',[App\Http\Controllers\ProfileController::class,'settings'])->name('admin.settings')->middleware('is_admin');
   
});
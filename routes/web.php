<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //category route start
    Route::group(['prefix' => 'category'], function(){
        Route::get('/',[CategoryController::class, 'index'])->name('category.show');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::post('/update/{category:id}',[CategoryController::class,'update'])->name('category.update');
        Route::post('/delete/{category:id}',[CategoryController::class,'destroy'])->name('category.delete');
    });
    //category route end

    //logo route start
    Route::group(['prefix' => 'logo'], function(){
        Route::get('/',[LogoController::class, 'index'])->name('logo.show');
        Route::post('/update/{logo:id}',[LogoController::class, 'update'])->name('logo.update');
    });
    //logo route end

    //product route start
    Route::group(['prefix' => 'product'], function(){
        Route::get('/',[ProductController::class, 'index'])->name('product.show');
        Route::post('/store',[ProductController::class,'store'])->name('product.store');
        Route::get('/edit/{product:id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/update/{product:id}',[ProductController::class,'update'])->name('product.update');
        Route::post('/delete/{product:id}',[ProductController::class,'destroy'])->name('product.delete');

        Route::get('/trash',[ProductController::class, 'trash'])->name('product.trash');
        Route::post('/restore/{product:id}',[ProductController::class,'restore'])->name('product.restore');
        Route::post('/pDelete/{product:id}',[ProductController::class,'pDelete'])->name('product.pDelete');

    });
    //product route end


});
















/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/checkout',[FrontendController::class,'checkout'])->name('checkout');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/login',[FrontendController::class,'login'])->name('login');
Route::get('/productDetails',[FrontendController::class,'productDetails'])->name('productDetails');
Route::get('/profile',[FrontendController::class,'profile'])->name('profile');
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/signup',[FrontendController::class,'signup'])->name('signup');
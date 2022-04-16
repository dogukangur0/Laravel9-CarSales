<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
// 1-Write in route
Route::get('hello',function(){
    return 'Hello World';
});

// 2-Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// 3-Call Controller Function
Route::get('/',[HomeController::class,'index'])->name(name:'home');

// 4-Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name(name:'test');

// 5-Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name(name:'param');

// 6-Route with post
Route::post('/save',[HomeController::class,'save'])->name(name:'test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ************** ADMİN PANEL ROUTES ************
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name(name: 'index');

    // ************** ADMİN CATEGORY ROUTES ************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name(name: 'index');
        Route::get('/create','create')->name(name: 'create');
        Route::post('/store','store')->name(name: 'store');
        Route::get('/edit/{id}','edit')->name(name: 'edit');
        Route::post('/update/{id}','update')->name(name: 'update');
        Route::get('/destroy/{id}','destroy')->name(name: 'destroy');
        Route::get('/show/{id}','show')->name(name: 'show');
    });

    // ************** ADMİN PRODUCT ROUTES ************
    Route::prefix('/product')->name('product.')->controller(\App\Http\Controllers\AdminPanel\AdminProductController::class)->group(function () {
        Route::get('/','index')->name(name: 'index');
        Route::get('/create','create')->name(name: 'create');
        Route::post('/store','store')->name(name: 'store');
        Route::get('/edit/{id}','edit')->name(name: 'edit');
        Route::post('/update/{id}','update')->name(name: 'update');
        Route::get('/destroy/{id}','destroy')->name(name: 'destroy');
        Route::get('/show/{id}','show')->name(name: 'show');
    });

    // ************** ADMİN PRODUCT IMAGE GALLERY ROUTES ************
    Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name(name: 'index');
        Route::post('/store/{pid}','store')->name(name: 'store');
        Route::get('/destroy/{pid}/{id}','destroy')->name(name: 'destroy');
    });
});


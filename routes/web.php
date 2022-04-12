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

Route::get('/admin',[AdminHomeController::class,'index'])->name(name:'admin');

// ************** ADMİN CATEGORY ROUTES ************

Route::get('/admin/category',[AdminCategoryController::class,'index'])->name(name:'admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name(name:'admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name(name:'admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name(name:'admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name(name:'admin_category_update');


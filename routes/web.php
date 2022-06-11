<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// **** HOME PAGE ROUTES ****
Route::get('/',[HomeController::class,'index'])->name(name:'home');
Route::get('/cars',[HomeController::class,'cars'])->name(name:'cars');

Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name(name: 'categoryproducts');


Route::get('/aboutus',[HomeController::class,'aboutus'])->name(name:'aboutus');
Route::get('/contact',[HomeController::class,'contact'])->name(name:'contact');
Route::get('/reference',[HomeController::class,'reference'])->name(name:'reference');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name(name:'storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name(name:'faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name(name:'storecomment');
Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');

// *****
Route::get('/product/{id}',[HomeController::class,'product'])->name(name:'product');

// 4-Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name(name:'test');

// 5-Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name(name:'param');

// 6-Route with post
Route::post('/save',[HomeController::class,'save'])->name(name:'test');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ************** USER AUTH CONTROL ************
Route::middleware('auth')->group(function () {

    //*************** USER PANEL ROUTES *****************
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function() {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/reviews', 'reviews')->name(name: 'reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name(name: 'reviewdestroy');
        Route::get('/addcars', 'addcars')->name(name: 'addcars');

        // ************** USER PRODUCT ROUTES ************
        Route::prefix('/product')->name('product.')->controller(ProductController::class)->group(function () {
            Route::get('/', 'index')->name(name: 'index');
            Route::get('/create', 'create')->name(name: 'create');
            Route::post('/store', 'store')->name(name: 'store');
            Route::get('/edit/{id}', 'edit')->name(name: 'edit');
            Route::post('/update/{id}', 'update')->name(name: 'update');
            Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
            Route::get('/show/{id}', 'show')->name(name: 'show');
        });

        // ************** USER PRODUCT IMAGE GALLERY ROUTES ************
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{pid}', 'index')->name(name: 'index');
            Route::post('/store/{pid}', 'store')->name(name: 'store');
            Route::get('/destroy/{pid}/{id}', 'destroy')->name(name: 'destroy');
        });

    });


// ************** ADMİN PANEL ROUTES ************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name(name: 'index');
    // ************** General Routes ROUTES ************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name(name: 'setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name(name: 'setting.update');
    // ************** ADMİN CATEGORY ROUTES ************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/create', 'create')->name(name: 'create');
        Route::post('/store', 'store')->name(name: 'store');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::get('/show/{id}', 'show')->name(name: 'show');
    });

    // ************** ADMİN PRODUCT ROUTES ************
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/create', 'create')->name(name: 'create');
        Route::post('/store', 'store')->name(name: 'store');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::get('/show/{id}', 'show')->name(name: 'show');
    });

    // ************** ADMİN PRODUCT IMAGE GALLERY ROUTES ************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name(name: 'index');
        Route::post('/store/{pid}', 'store')->name(name: 'store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name(name: 'destroy');
    });

    // ************** ADMİN MESSAGE ROUTES ************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/show/{id}', 'show')->name(name: 'show');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
    });

    // ************** ADMİN FAQ ROUTES ************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/create', 'create')->name(name: 'create');
        Route::post('/store', 'store')->name(name: 'store');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::get('/show/{id}', 'show')->name(name: 'show');
    });

    // ************** ADMİN COMMENT ROUTES ************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/show/{id}', 'show')->name(name: 'show');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
    });

    // ************** ADMİN USER ROUTES ************
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::get('/show/{id}', 'show')->name(name: 'show');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::post('/addrole/{id}', 'addrole')->name(name: 'addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name(name: 'destroyrole');
    });
});
});


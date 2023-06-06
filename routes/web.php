<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Front End
Route::get('/', [HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index'])->name('index');
Route::get('/404',[HomeController::class,'error_page']);

//Back End (Admin)
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'show_dashboard']);
Route::get('/logout',[\App\Http\Controllers\AdminController::class,'logout']);
Route::post('/admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
Route::get('/all-users',[\App\Http\Controllers\AdminController::class,'allUsers']);
Route::get('dashboard/profile', [AdminController::class, 'showProfile']);
//Product
Route::resource('admin/product',ProductController::class);


//Manufacturer
Route::resource('/admin/manufacturer', ManufacturerController::class);

//User Management

Route::get('/users',[\App\Http\Controllers\UserManagement::class,'users']);

Route::get('tim-kiem', [ProductController::class, 'cus_timKiemSP']);

Route::get('/all-users',[UserController::class,'viewall']);
Route::get('/add-user',[\App\Http\Controllers\AuthController::class,'add_user']);
Route::get('/register-auth',[\App\Http\Controllers\AuthController::class,'register_auth']);
Route::get('/login-auth',[\App\Http\Controllers\AuthController::class,'login_auth']);
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register']);
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login']);

//Cart

Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::post('/update-cart','CartController@update_cart');
Route::post('/save-cart','CartController@save_cart');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/show-cart','CartController@show_cart');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/del-all-product','CartController@delete_all_product');


//Banner
Route::get('/manage-slider',[\App\Http\Controllers\SliderController::class,'manage_slider']);
Route::get('/add-slider',[\App\Http\Controllers\SliderController::class,'add_slider']);
Route::post('/insert-slider',[\App\Http\Controllers\SliderController::class,'insert_slider']);
Route::get('/delete-slide/{slide_id}',[\App\Http\Controllers\SliderController::class,'delete_slide']);
Route::get('/unactive-slide/{slide_id}',[\App\Http\Controllers\SliderController::class,'unactive_slide']);
Route::get('/active-slide/{slide_id}',[\App\Http\Controllers\SliderController::class,'active_slide']);

//customer
Route::get('/cus_login',[UserController::class,'loginUser'])->name('loginUser');
Route::post('/loginAuth',[UserController::class,'userLogin'])->name('userLogin');
Route::get('/cus_register',[UserController::class,'register'])->name('register');
Route::post('store',[UserController::class,'store'])->name('store');
Route::get('/users',[UserController::class,'viewall']);
Route::get('/editUser{user}',[UserController::class,'viewEdit'])->name('viewEdit');
Route::delete('/{user}',[UserController::class,'destroy1'])->name('destroy1');
Route::get('show/{user}',[UserController::class,'show'])->name('show');
Route::post('/change-password', [UserController::class, 'updatePassword'])->name('update-password');
Route::get('outUser',[UserController::class,'signout'])->name('signout');
Route::get('/search',[UserController::class,'search'])->name('search');
Route::get('/fix_user{user}',[UserController::class,'fix'])->name('fix');
Route::put('/fix_user/{user}',[UserController::class,'update'])->name('update');


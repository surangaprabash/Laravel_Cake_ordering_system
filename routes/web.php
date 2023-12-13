<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('about',[AuthController::class,'about'])->name('about');
Route::get('service',[AuthController::class,'service'])->name('service');
Route::get('contact',[AuthController::class,'contact'])->name('contact');

Route::group(['middleware' => 'guest'],function(){

    Route::get('/',[AuthController::class,'welcome'])->name('welcome');

    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:3,1');

    Route::get('register',[AuthController::class,'register_here'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register');

});

Route::group(['middleware' => 'auth'],function(){

    //user functionality

    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::get('reqorder',[AuthController::class,'reqorder'])->name('reqorder');
    Route::post('reqorder',[AuthController::class,'order_cake'])->name('reqorder');

    Route::get('myOrder',[AuthController::class,'myOrder'])->name('myOrder');
    Route::get('cancel_order/{id}',[AuthController::class,'cancel_order'])->name('cancel_order');

    Route::get('profile',[AuthController::class,'profile'])->name('profile');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

    //admin functionality
    Route::group(['middleware' => 'admin'],function(){
        Route::get('admin',[AdminController::class,'admin'])->name('admin');
    
        Route::get('addcake',[AdminController::class,'index'])->name('addcake');
        Route::post('addcake',[AdminController::class,'add_cake'])->name('addcake');
        
        Route::get('editcake/{id}',[AdminController::class,'editcake'])->name('editcake');
        Route::put('update_cake/{id}',[AdminController::class,'update_cake'])->name('update_cake');
        Route::get('deletecake/{id}',[AdminController::class,'deletecake'])->name('deletecake');
        
        Route::get('reject_order/{id}',[AdminController::class,'reject_order'])->name('reject_order');
        Route::get('accept_order/{id}',[AdminController::class,'accept_order'])->name('accept_order');
        Route::get('deliver_order/{id}',[AdminController::class,'deliver_order'])->name('deliver_order');

        Route::get('addcontact',[AdminController::class,'contact'])->name('contact');
    });
});





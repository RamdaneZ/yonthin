<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['lang','data'])->group( function(){
    Route::get('/',[MainController::class,'index']);
    Route::get('/contact',[MainController::class,'contact']);
    Route::get('/about',[MainController::class,'about']);
    Route::post('/sendmessage',[MainController::class,'sendMessage']);
    Route::get('/category/{slug}',[MainController::class,'category']);
});

    Route::get('/lang/{locale}', function($locale){
        if(in_array($locale,['en','ar','fr'])){
            session()->put('locale',$locale);
        }
        return back();
    });

    Route::prefix('/admin')->group(function(){
        Route::get('/',[AdminController::class,'index']);
        Route::post('/login',[AdminController::class,'login']);
        Route::get('/logout',[AdminController::class,'logout']);

        Route::middleware(['is_admin'])->group( function(){
            Route::get('dashboard',[AdminController::class,'dashboard']);
            Route::get('profile',[AdminController::class,'profile']);
            Route::post('editprofile',[AdminController::class,'editprofile']);

            Route::prefix('/messages')->group(function(){
                Route::get('/',[AdminController::class,'messages']);
                Route::get('/detail/{id}',[AdminController::class,'detail_message']);
                Route::get('/delete/{id}',[AdminController::class,'delete_message']);
            });

            Route::prefix('/cotations')->group(function(){
                Route::get('/',[AdminController::class,'cotations']);
                Route::get('/detail/{id}',[AdminController::class,'detail_cotations']);
                Route::get('/delete/{id}',[AdminController::class,'delete_cotations']);
            });

            Route::prefix('/homepage')->group(function(){
                Route::get('/',[AdminController::class,'homepage']);
                Route::get('/edit/{slider}',[AdminController::class,'homepage_edit']);
                Route::get('/delete/{slider}',[AdminController::class,'homepage_delete']);
                Route::post('store',[AdminController::class,'homepage_store']);
                Route::post('/update/{slider}',[AdminController::class,'homepage_update']);
            });

            Route::prefix('/users')->group(function(){
                Route::get('/',[UserController::class,'index']);
                Route::get('/add',[UserController::class,'add']);
                Route::get('/edit/{id}',[UserController::class,'edit']);
                Route::get('/delete/{id}',[UserController::class,'delete']);
                Route::post('store',[UserController::class,'store']);
                Route::post('/update/{id}',[UserController::class,'update']);
            });

            Route::prefix('/admin')->group(function(){
                Route::get('/',[AdminController::class,'admin']);
                Route::get('/add',[AdminController::class,'admin_add']);
                Route::get('/edit/{admin}',[AdminController::class,'admin_edit']);
                Route::get('/delete/{admin}',[AdminController::class,'admin_delete']);
                Route::post('store',[AdminController::class,'admin_store']);
                Route::post('/update/{admin}',[AdminController::class,'admin_update']);
            });

            Route::prefix('/categories')->group(function(){
                Route::get('/',[CategoryController::class,'index']);
                Route::get('/add',[CategoryController::class,'add']);
                Route::get('/edit/{id}',[CategoryController::class,'edit']);
                Route::get('/delete/{id}',[CategoryController::class,'delete']);
                Route::post('store',[CategoryController::class,'store']);
                Route::post('/update/{id}',[CategoryController::class,'update']);
            });

            Route::prefix('/products')->group(function(){
                Route::get('/',[ProductController::class,'index']);
                Route::get('/add',[ProductController::class,'add']);
                Route::get('/edit/{product}',[ProductController::class,'edit']);
                Route::get('/delete/{product}',[ProductController::class,'delete']);
                Route::post('store',[ProductController::class,'store']);
                Route::post('/update/{product}',[ProductController::class,'update']);
            });

            Route::get('settings',[AdminController::class,'settings']);
            Route::post('settings/update',[AdminController::class,'settings_update']);

            Route::get('email',[AdminController::class,'email']);
        });
    });
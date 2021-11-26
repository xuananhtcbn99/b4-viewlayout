<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,"index"])->name("users.index");
    Route::get('/{id}/posts',[UserController::class,"showAllPost"])->name("users.showAllPost");


});

Route::get('/login',[AuthController::class,'showFormLogin'])->name("admin.showFormLogin");
Route::post('/login',[AuthController::class,'login'])->name("admin.login");
Route::get('/logout',[AuthController::class,'logout'])->name("admin.logout");

Route::get('/register',[AuthController::class,'showFormRegister'])->name("admin.showFormRegister");
Route::post('/register',[AuthController::class,'register'])->name("admin.register");

Route::prefix('products')->group(function (){
    Route::get('/',[ProductController::class,"index"])->name("products.list");
    Route::get('/create',[ProductController::class,"create"])->name("products.create");
    Route::post('/create',[ProductController::class,"store"])->name("products.store");
    Route::get('{id}/detail', [ProductController::class, "show"])->name("products.detail");
    Route::get('{id}/delete', [ProductController::class, "destroy"])->name("products.delete");
    Route::get('{id}/update', [ProductController::class, 'edit'])->name("products.edit");
    Route::post('{id}/update', [ProductController::class, 'update'])->name("products.update");
});
Route::prefix('posts')->group(function (){
    Route::get('/',[PostController::class,"index"])->name("posts.index");
    Route::get('/create',[PostController::class,"showFormCreate"])->name("posts.create");
    Route::post('/create',[PostController::class,"store"])->name("posts.showFormCreate");
});

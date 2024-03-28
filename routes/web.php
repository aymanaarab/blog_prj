<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource(('/'),PostController::class)->names([
    'index'=>'posts.index',
    'create'=>'posts.create',
    'store'=>'posts.store',
    'show'=>'posts.show',
]);
Route::get('admin',function(){
    return view('admin');
});
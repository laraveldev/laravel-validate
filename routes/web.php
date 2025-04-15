<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',[PostController::class,'create'])->name('posts.create');
Route::post('/store',[PostController::class,'store'])->name('posts.store');

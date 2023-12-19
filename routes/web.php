<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\AiPostsController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/login', function(){
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

Route::get('/logout', function(){
    return view('logout');
})->middleware(['auth', 'verified'])->name('logout');

Route::get('/register', function(){
    return view('register');
})->middleware(['auth', 'verified'])->name('register');

Route::get('/communities', function(){
    return view('communities');
})->middleware(['auth', 'verified'])->name('communities');


Route::controller(AiPostsController::class)->group(function(){
    Route::get('/questions', 'result')->name('discussview');
    Route::get('/create','create')->name('discuss');
    Route::get('/store', 'store')->name('store');
    Route::get('/details/{id}', 'details')->name('details');
    Route::get('/editPost/{id}', 'edit')->name('editPost');
    Route::get('/updatePost', 'update')->name('updatePost');
    Route::get('/deletePost/{id}','destroy')->name('deletePost');
});




Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/questions', [CategoryController::class, 'index']);

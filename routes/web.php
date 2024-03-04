<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class,'homepage']);


Route::get('/wiki', [HomeController::class,'wikihome'])->name('wiki');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->middleware('auth')->name('dashboard');

Route::get('/home', [HomeController::class,'index']) ->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [AdminController::class,'post_page']);

Route::post('/add_post', [AdminController::class,'add_post']);

Route::get('/show_page', [AdminController::class,'show_page']);

Route::get('/delete_post/{id}', [AdminController::class,'post_delete']);

Route::get('/edit_post/{id}', [AdminController::class,'edit_post']);

Route::post('/update_post/{id}', [AdminController::class,'update_post']);

Route::get('/post_details/{id}', [HomeController::class,'post_details']);

Route::get('/create_post', [HomeController::class,'create_post'])->middleware('auth');

Route::post('/user_post', [HomeController::class,'user_post']);

Route::get('/my_post', [HomeController::class,'my_post'])->middleware('auth');

Route::get('/post_details_user/{id}', [HomeController::class,'post_details_user']) ->middleware('auth');

Route::get('/my_pos_del/{id}', [HomeController::class,'my_pos_del']) ->middleware('auth');

//View
Route::get('/user_post_update/{id}', [HomeController::class,'user_post_update']) ->middleware('auth');

//Update
Route::post('/update_user_post/{id}', [HomeController::class,'update_user_post']);

//Admin Accept Reject 
Route::get('/accept_post/{id}', [AdminController::class,'accept_post']);

Route::get('/reject_post/{id}', [AdminController::class,'reject_post']);

Route::get('/wiki/search', [HomeController::class, 'search'])->name('wiki.search');
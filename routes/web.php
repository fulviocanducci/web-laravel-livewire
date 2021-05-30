<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CounterController;
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

Route::get('/counter', [CounterController::class, "index"])->name('counter.index');

Route::get('/admin', [AdminController::class, "index"])->name('admin.index');
Route::view('/admin/posts', \App\Http\Livewire\Post\Index::class)->name('admin.post.index');

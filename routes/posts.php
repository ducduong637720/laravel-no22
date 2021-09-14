<?php

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
})->name('home');
Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('posts')->name('posts.')->group(function(){
        Route::get('/list', function () {
            return view('backend posts list');
        })->name('list');
        Route::get('/(id)', function ($id) {
            return view('backend show posts ');
        })->name('show');
        Route::get('/create', function () {
            return view('create');
        })->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.posts.index');
        })->name('store');
        Route::get('/edit/(id)', function ($id) {
            return view('edit');
        })->name('edit');
        Route::put('/update/(id)', function ($id) {
            return redirect()->route('backend.posts.index');
        })->name('update');
        Route::get('/delete', function () {
            return view('backend posts delete');
        })->name('delete');
    });
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard.index');
});

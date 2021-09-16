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
    return view('home');
})->name('home');

Route::get('/posts/show', function () {
    return view('frontend.posts.show');
})->name('frontend.posts.show');


Route::prefix('backend')->name('backend.')->middleware([])->group(function(){
    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard.index');

    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/list', function () {
            return view('backend categories list');
        })->name('list');
        Route::get('/(id)', function ($id) {
            return view('backend show categories ');
        })->name('show');
        Route::get('/create', function () {
            return view('create');
        })->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.categories.index');
        })->name('store');
        Route::get('/edit/(id)', function ($id) {
            return view('edit');
        })->name('edit');
        Route::put('/update/(id)', function ($id) {
            return redirect()->route('backend.categories.index');
        })->name('update');
        Route::get('/delete', function () {
            return view('backend categories delete');
        })->name('delete');
    });
    
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/list', function () {
            return view('backend.users.index');
        })->name('index');
        Route::get('/(id)', function ($id) {
            return view('backend.users.show ');
        })->name('show');
        Route::get('/create', function () {
            return view('backend.users.create');
        })->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.users.index');
        })->name('store');
        Route::get('/edit', function () {
            return view('backend.users.edit');
        })->name('edit');
        Route::put('/update/(id)', function ($id) {
            return redirect()->route('backend.users.index');
        })->name('update');
        Route::get('/delete', function () {
            return view('backend users delete');
        })->name('delete');
    });
    
});

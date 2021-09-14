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
Route::prefix('backend')->name('backend.')->group(function(){
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
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard.index');
});

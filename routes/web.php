<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
// Route::get('/', [HomeController::class,'index']);
Route::get('/','HomeController@index');

Route::get('/posts/show', function () {
    return view('frontend.posts.show');
})->name('frontend.posts.show');


Route::prefix('backend')
->name('backend.')
->namespace('Backend')
->middleware([])
->group(function(){
    // Route::get('dashboard', 'DashboardController@index')
    // ->name('dashboard.index');

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
    //Dashboard
    Route::resource('/dashboard', DashboardController::class);
    //Post
    Route::resource('posts', PostController::class)->only([
        'index', 'store', 'create','update'
    ])->names([
        'create' => 'posts.add'
    ])->parameters([
        'posts' => 'posts_id'
    ]);
    //
    Route::resource('users', UserController::class);
    
//    Route::resources([
//        'posts'=> PostController::class,
//     //    'users'=> UserController::class,
//    ]);
});
<?php

use App\Models\ProductCategory;
use App\Models\ProductVariable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;


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


Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/', [::class, 'index'])->name('index-home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {

        Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

        Route::prefix('users')->name('user.')->group(function () {
            Route::get('', [UserController::class, 'index'])->name('index');
            Route::get('/add', [UserController::class, 'create'])->name('add');
            Route::post('/add/store', [UserController::class, 'store'])->name('store');
            Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('/edit/update/{id}', [UserController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
            // Change Password
            Route::post('/change-password/{id}', [UserController::class, 'editPasswordProcess'])->name('change-password');
        });

        Route::prefix('blogs')->name('blog-page.')->group(function () {
            Route::get('', [BlogController::class, 'index'])->name('index');
            Route::get('/add', [BlogController::class, 'create'])->name('add');
            Route::post('/add/store', [BlogController::class, 'store'])->name('store');
            Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
            Route::post('/edit/update/{id}', [BlogController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('delete');
        });

    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('', [ProfileController::class, 'index'])->name('index');
        Route::patch('/update/{user}', [ProfileController::class, 'update'])->name('update');
        // Route::post('/update/{user}', [ProfileController::class, 'updatePassword'])->name('updatePassword');
    });

});

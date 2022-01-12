<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CoursesController;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class)->only('index','store','update','destroy');
    Route::post('categories/active/{category}',[CategoryController::class,'active'])->name('categories.active');
    Route::resource('courses', CoursesController::class)->except('show');
    Route::post('courses/active/{course}',[CoursesController::class,'active'])->name('courses.active');
});
require __DIR__.'/auth.php';

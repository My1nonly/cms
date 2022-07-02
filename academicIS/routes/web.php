<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;

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


Route::resource('student', StudentController::class);
    

use App\Http\Controllers\ArticleController;
Route::resource('articles', ArticleController::class);

route::get('/article/print_pdf', [ArticleController::class, 'print_pdf'])->name('print_pdf');
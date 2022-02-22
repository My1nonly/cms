<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    echo "Hi! Welcome To Laravel";
    
});

Route::get("/about", function(){
    return view ('about');
});

Route::get('/{id}', function ($id) {
    echo "This is an article page with ID: $id";
    });

Route::get('/', [PageController::class,'index'])->name('\.index');

Route::get('/about', [PageController::class,'about'])->name('/about.about');

Route::get('/{id}', [PageController::class,'articles'])->name('/articles.articles');
<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;
//use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;

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
/*
//Practicum1
Route::get('/', function () {
    echo "Hi! Welcome To Laravel";
    
});

Route::get("/about", function(){
    return view ('about');
});

Route::get('/{id}', function ($id) {
    echo "This is an article page with ID: $id";
    });

//Practicum2
Route::get('/', [PageController::class,'index'])->name('\.index');

Route::get('/about', [PageController::class,'about'])->name('/about.about');

Route::get('/{id}', [PageController::class,'articles'])->name('/articles.articles');

//Practicum3
Route::get('/', function(){
    echo "Hi! Welcome to the Homepage";
});

//Route prefix
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () { echo "this is marbel edu games page";
        Route::get('/marble-and-friends-kids-games', function () { echo "this is marbel and frienda kids games page";
            Route::get('/riri-story-books', function () { echo "this is riri story books page";
                Route::get('/kolak-kids-songs', function () { echo "this is kolak kids songs page";
                });
            });
        });
    });
});
    
//Route parameter
Route::get('/newspage', function ($news) {
        return 'User '.$news;
        });
        Route::get('/news/{news}', function ($newsId,) {
        });

//Route prefix
Route::prefix('/program')->group(function () {
    Route::get('/carreer', function () { echo "this is carreer page";
        Route::get('/internship', function () { echo "this is internship page";
            Route::get('/industry-visit', function () { echo "this is industry visit page";
            });
        });
    });
});

//Regular Route
Route::get('/about', function () {
    echo "About Us";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


//Week3 - Practicum 1

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/dishes', [HomeController::class, 'dishes']);

Route::get('/map', [HomeController::class, 'map']);

Route::get('/book', [HomeController::class, 'book']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/feedback', [HomeController::class, 'feedback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

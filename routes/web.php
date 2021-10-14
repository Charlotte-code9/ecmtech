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
})->middleware(['guest']);


/** All routes for Admin */
Route::group([
        'prefix'=>'admin',
        'as'=>'admin.',
        'middleware' => ['auth', 'role:admin']
    ],
    function(){
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
});


/** All routes for User/Borrower */
Route::group([
    'prefix'=>'dashboard',
    'as'=>'dashboard.',
    'middleware' => ['auth', 'role:user']
],
function(){
    Route::get('/', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');

    Route::group([
        'prefix'=>'user',
        'as'=>'user.'
    ],
    function(){
        Route::get('profile', function () {
            return "This is the user profile.";
        })->name('profile');
    });
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


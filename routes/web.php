<?php

use App\Http\Controllers\Backend\BackEndController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(FrontendController::class)->group(function (){
    Route::get('/','index')->name('front.index');
    Route::get('/single-post','single')->name('front.single');
});


Route::controller(BackEndController::class)->prefix('dashboard')->group(function (){
    Route::get('/','index')->name('back.index');
});

require __DIR__.'/auth.php';

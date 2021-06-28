<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('createactivity')->group(function()
{
    Route::get('/create', function () {
        return view('create');
    })->name('create');
}
);

Route::prefix('viewactivity')->group(function()
{
    Route::get('/view', function () {
        return view('view');
    })->name('view');


Route::get('view',  [informationController::class, 'view'])->name('view.information');
Route::get('store',  [informationController::class, 'store'])->name('store.information');


});

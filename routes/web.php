<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\activityController;

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
 //   Route::get('/create', function () {
   //     return view('create');
  // })->name('create');


//ROUTES FOR CRUD
Route::get('view',  [activityController::class, 'view'])->name('view.createactivity');
Route::get('create',  [activityController::class, 'create'])->name('create.createactivity');
Route::post('store',  [activityController::class, 'store'])->name('store.createactivity');
Route::get('delete/{id}',  [activityController::class, 'delete'])->name('delete.createactivity');
Route::get('edit/{id}',  [activityController::class, 'edit'])->name('edit.createactivity');

});

//Route::prefix('viewactivity')->group(function()
//{
  //  Route::get('/view', function () {
    //    return view('view');
    //})->name('view');

  //  Route::post('store',  [activityController::class, 'store'])->name('store.activity');

//});



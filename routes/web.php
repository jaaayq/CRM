<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\feedbackController;

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


Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});



Route::prefix('createactivity')->group(function()
{
 //   Route::get('/create', function () {
   //     return view('create');
  // })->name('create');


//ROUTES FOR CRUD
Route::get('view',  [activityController::class, 'view'])->name('view.createactivity');
Route::get('create',  [activityController::class, 'create'])->name('create.createactivity');
Route::post('store',  [activityController::class, 'store'])->name('store.createactivity');
Route::post('/update/{id}',  [activityController::class, 'update'])->name('update.createactivity');
Route::get('delete/{id}',  [activityController::class, 'delete'])->name('delete.createactivity');
Route::get('edit/{id}',  [activityController::class, 'edit'])->name('edit.createactivity');




});

Route::prefix('createfeedback')->group(function()
{
 //   Route::get('/create', function () {
   //     return view('create');
  // })->name('create');


//ROUTES FOR CRUD FEEDBACK
Route::get('view',  [feedbackController::class, 'view'])->name('joinactivityview');
Route::get('create',  [feedbackController::class, 'create'])->name('create.createfeedback');
Route::post('store',  [feedbackController::class, 'store'])->name('store.createfeedback');
Route::post('/update/{id}',  [feedbackController::class, 'update'])->name('update.createfeedback');
Route::get('delete/{id}',  [feedbackController::class, 'delete'])->name('delete.createfeedback');
Route::get('edit/{id}',  [feedbackController::class, 'edit'])->name('edit.createfeedback');





});



Route::prefix('joinactivity')->group(function()
{
    Route::get('viewjoin',  [activityController::class, 'viewjoin'])->name('viewjoin.joinactivity');

});


Route::prefix('joinactivitytest')->group(function()
{
    Route::get('viewjointest',  [activityController::class, 'viewjointest'])->name('viewjointest.joinactivitytest');

});

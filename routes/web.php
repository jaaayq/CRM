<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\UsersController;
use App\Models\activity1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Request as FacadesRequest;

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



Route::get('/redirect', '\App\Http\Controllers\HomeController@index');

Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
    'accessrole',

]], function () {




    Route::get('/aboutus', function () {
        return view('aboutus');
    })->name('aboutus');

    Route::get('/users', function () {
        return view('users.index');
    })->name('usersindex');


    Route::resource('tasks', \App\Http\Controllers\TasksController::class);
    Route::resource('users', \App\Http\Controllers\UsersController::class);

    //Deactivate user

    Route::get('/users/status/{user_id}/{status_code}', [UsersController::class, 'updatestatus'])->name('users.status.update');
    Route::get('dashboard', [feedbackController::class, 'viewfbchart'])->name('dashboard');
});




Route::get('/', function () {
    return view('auth.login');
});



Route::get('/customer', function () {
    return view('customer');
});


Route::prefix('createactivity')->group(function () {



    //ROUTES FOR CRUD
    Route::get('view',  [activityController::class, 'view'])->name('view.createactivity');
    Route::get('create',  [activityController::class, 'create'])->name('create.createactivity');
    Route::post('store',  [activityController::class, 'store'])->name('store.createactivity');
    Route::post('/update/{id}',  [activityController::class, 'update'])->name('update.createactivity');
    Route::get('delete/{id}',  [activityController::class, 'delete'])->name('delete.createactivity');
    Route::get('edit/{id}',  [activityController::class, 'edit'])->name('edit.createactivity');

    //Deactivate formfeedback

    Route::get('/users/status/{act_id}/{act_status}', [activityController::class, 'updateactivitystatus'])->name('activity.status.update');
});

Route::prefix('createfeedback')->group(function () {



    //ROUTES FOR CRUD FEEDBACK
    Route::get('view',  [feedbackController::class, 'view'])->name('joinactivityview');
    Route::get('create',  [feedbackController::class, 'create'])->name('create.createfeedback');
    Route::post('store',  [feedbackController::class, 'store'])->name('store.createfeedback');
    Route::post('/update/{id}',  [feedbackController::class, 'update'])->name('update.createfeedback');
    Route::get('delete/{id}',  [feedbackController::class, 'delete'])->name('delete.createfeedback');
    Route::get('edit/{id}',  [feedbackController::class, 'edit'])->name('edit.createfeedback');
    Route::get('customer',  [feedbackController::class, 'customer'])->name('customerfeedback');
});

//Feedback Stats
Route::get('feedback/stats',  [feedbackController::class, 'index'])->name('feedbackstatistics');

//FEEDBACK FORM

Route::prefix('joinactivity')->group(function () {
    Route::get('viewjoin',  [activityController::class, 'viewjoin'])->name('viewjoin.joinactivity')->middleware('signed');
});



//JOINACTIVITY

Route::prefix('joinactivitytest')->group(function () {
    Route::get('viewjointest',  [activityController::class, 'viewjointest'])->name('viewjointest.joinactivitytest');
});

//JOINACITIVTY AUTHENTICATION

Route::prefix('index')->group(function () {
    Route::get('data',  [activityController::class, 'data'])->name('data.index');
});

Route::prefix('aboutus')->group(function () {
    Route::get('viewaboutus',  [activityController::class, 'viewaboutus'])->name('viewaboutus.aboutus');
});

//Feedback Form
Route::prefix('Customer')->group(function () {
    Route::post('Feedback', [activityController::class, 'viewactivity'])->name('customercode');
});


//Redirect Route

Route::get('Homepage', [UsersController::class, 'Redirect'])->name('redirectpage');

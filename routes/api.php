<?php

use App\Http\Controllers\activityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllerApi;
use App\Http\Controllers\FeedbackControllerApi;
use App\Http\Controllers\ActivityControllerApi;
use App\Http\Controllers\AuthController;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's

});


//Routes for user
Route::post('/login', [AuthController::class, 'login']);





//Public routes for Activity
Route::get('/activity', [ActivityControllerApi::class, 'index']);
Route::get('/activity/search/{activityname}', [ActivityControllerApi::class, 'search']);
Route::get('/activity/{id}', [ActivityControllerApi::class, 'show']);


//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    //Protected routes for Activity
    Route::post('/activity', [ActivityControllerApi::class, 'store']);
    Route::put('/activity/{id}', [ActivityControllerApi::class, 'update']);
    Route::delete('/activity/{id}', [ActivityControllerApi::class, 'destroy']);


    //Protected routes for Users
    Route::post('/logout', [AuthController::class, 'logout']);



    //Protected routes for feedback
    Route::post('/feedback', [FeedbackControllerApi::class, 'index']);
    Route::get('/feedback/{feedbackactivitycode}', [FeedbackControllerApi::class, 'count']);
});

//Route::resource('/activity', ActivityControllerApi::class);

<?php

use App\Http\Controllers\TeachersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::view('home','home');

// Route::post('index',[TeachersController::class,'add_teacher']);




Route::post('login',[ApiController::class,'loginUser'])->name('login');


Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('user',[ApiController::class,'userDetails']);
    Route::get('logout',[ApiController::class,'logout'])->name('logout');
    
});
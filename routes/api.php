<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FormController;
use App\Http\Controllers\API\ScoreController;

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

Route::group(['middleware' => 'auth:sanctum'], function () {
    //Create Data
    Route::post('/create', [FormController::class, 'create']);
    //Manipulation Data Student
    Route::get('/edit/{id}', [FormController::class, 'edit']);
    Route::post('/edit/{id}', [FormController::class, 'update']);
    //Delete Data Student
    Route::get('/delete/{id}', [FormController::class, 'delete']);

    //Crud score with relation to Student
    Route::post('/create-score-student', [ScoreController::class, 'create']);
    Route::get('/data-student/{id}', [ScoreController::class, 'getStudent']);
    Route::post('/data-student/{id}', [ScoreController::class, 'update']);

    //Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::post('/login', [AuthController::class, 'login']);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\SubareasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::post('/users', [UserController::class, 'store']);

Route::post('/login', [AuthController::class, 'logIn']);
Route::get('/cities', [CitiesController::class, 'index']);
Route::get('/cities/{state_id}', [CitiesController::class, 'listPerUF']);

Route::get('/states', [StatesController::class, 'index']);
Route::get('/organizations', [OrganizationController::class, 'index']);
Route::get('/organizations/{id}', [OrganizationController::class, 'show']);
Route::get('/areas', [AreasController::class, 'index']);
Route::get('/subareas', [SubareasController::class, 'index']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logOut']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::apiResource('interests', InterestController::class);

    Route::post('/contacts', [ContactController::class, 'store']);
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/contacts/{id}', [ContactController::class, 'show']);
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);

    Route::get('/opportunities', [OpportunityController::class, 'index']);
    Route::get('/opportunities/{id}', [OpportunityController::class, 'show']);
});

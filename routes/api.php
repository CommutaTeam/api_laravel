<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\UserController;
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
//Route::post('/login', [AuthController::class, 'logIn']);
Route::get('/login', [AuthController::class])->name('user.login');

//Route::get('email/verify/{id}', [VerificationController::class, 'verify']);
//Route::get('email/resend', [VerificationController::class, 'resend']);

Route::get('email/verify/{id}', [VerificationController::class])->name('verification.verify'); // Make sure to keep this as your route name
Route::get('email/resend', [VerificationController::class])->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    //$request->fulfill();
 
    return redirect('https://www.instagram.com/commuta_project/');
})->middleware(['auth', 'signed'])->name('verification.verify');

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

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\PersonalDataController;



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

// Obtener información del usuario
Route::get('/user/{id}', [UserController::class, 'show']);
//obtener perfil
Route::get('/profile', [ProfileController::class, 'getProfile']);
Route::post('/profile', [ProfileController::class, 'update']);

// Actualizar información del usuario
Route::get('/summary', [DescriptionController::class, 'show']);
Route::post('/summary', [DescriptionController::class, 'update']);
Route::post('/frameworks', [FrameworkController::class, 'update']);
Route::get('/frameworks', [FrameworkController::class, 'show']);
Route::post('/hobby', [HobbyController::class, 'update']);
Route::get('/hobby', [HobbyController::class, 'show']);
Route::post('/social-links', [SocialLinkController::class, 'update']);
Route::get('/personal-data', [PersonalDataController::class, 'show']);
Route::post('/personal-data', [PersonalDataController::class, 'update']);


?>

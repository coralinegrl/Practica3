<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


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
Route::put('/description', [DescriptionController::class, 'update']);
Route::put('/frameworks', [FrameworkController::class, 'update']);
Route::put('/hobby', [HobbyController::class, 'update']);
Route::put('/social-links', [SocialLinkController::class, 'update']);
Route::put('/personal-data', [PersonalDataController::class, 'update']);


?>

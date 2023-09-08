<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\AlerteController;
use App\Models\User;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    // Gestion Dashboard
    Route::post('/getDashboard', [GeneralController::class, 'Index']);
    // Gestion Dashboard

    // Gestion Propriete
    Route::post('/allPropriete', [ProprieteController::class, 'index']);
    Route::post('/createPropriete', [ProprieteController::class, 'create']);
    Route::post('/showPropriete', [ProprieteController::class, 'show']);
    Route::post('/updatePropriete', [ProprieteController::class, 'update']);
    // Gestion Propriete

    // Gestion alerte
    Route::post('/createAlerte', [AlerteController::class, 'create']);
    // Gestion alerte

    // Gestion Profil 
    Route::post('/update', [UserController::class, 'UpdateProfil']);
    // Gestion Profil 

    // Gestion Auth
    Route::post('/chugc', [AuthController::class, 'CAAGC']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
    // Gestion Auth
});
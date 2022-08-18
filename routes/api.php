<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;

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

Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('validate_account',[UserController::class,'validateAccount']);
Route::post('safe_password',[UserController::class,'safePassword']);
Route::get('documentation',[UserController::class,'viewDocumentation'])->name('view.documentation');
Route::get('registerUser',[UserController::class,'viewRegister'])->name('view.register');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('index',[CharacterController::class,'index']);
    Route::post('register_character',[CharacterController::class,'store']);
    Route::post('logout',[UserController::class,'logout']);
    Route::post('edit_password',[UserController::class,'editPassword']);
});

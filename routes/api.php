<?php

use App\Http\Controllers\AnimeListController;
use App\Http\Controllers\DataImageSliderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LanjutNontonController;
use App\Http\Controllers\RecommendController;
use App\Http\Controllers\TrendController;
use App\Http\Controllers\UserDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/animelist',[AnimeListController::class,'index']);
Route::get('/dataimageslider',[DataImageSliderController::class,'index']);
Route::get('/userdata',[UserDataController::class,'index']);
Route::get('/lanjutnonton',[LanjutNontonController::class,'index']);
Route::get('/history',[HistoryController::class,'index']);
Route::get('/trend',[TrendController::class,'index']);
Route::get('/recommend',[RecommendController::class,'index']);
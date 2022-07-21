<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

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

 Route::get('setting',[HomeController::class,'setting']);
 Route::get('slider',[HomeController::class,'Slider']);
 Route::get('choose',[HomeController::class,'Choose']);
 Route::get('home_category',[HomeController::class,'Category']);
 Route::get('facilitie',[HomeController::class,'Facilitie']);
 Route::get('work_categories',[HomeController::class,'Work_Categories']);
 Route::get('our_team',[HomeController::class,'Our_Team']);
 Route::get('review',[HomeController::class,'Review']);
 Route::get('client_category',[HomeController::class,'ClientCategory']);
 Route::post('contact/store',[HomeController::class,'ContactStore']);
  Route::get('about',[HomeController::class,'About']);
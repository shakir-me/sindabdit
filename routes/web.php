<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FacilitiController;
use App\Http\Controllers\Admin\WorkCategoryController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\TeamController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


 Route::get('logout',[AdminController::class,'Logout'])->middleware('auth');
 Route::get('website/setting',[SettingController::class,'Setting'])->middleware('auth');
 Route::post('update/setting/{id}',[SettingController::class,'Update'])->name('update.setting')->middleware('auth');

 Route::get('choose/us',[SettingController::class,'ChooseUs'])->middleware('auth');
 Route::post('update/choose/{id}',[SettingController::class,'ChooseUpdate'])->name('update.choose')->middleware('auth');

 //slider route
  Route::get('all/slider',[SliderController::class,'all'])->name('all.slider')->middleware('auth');
  Route::get('add/slider',[SliderController::class,'add'])->name('add.slider')->middleware('auth');
  Route::post('store/slider',[SliderController::class,'store'])->name('store.slider')->middleware('auth');
  Route::get('edit/slider/{id}',[SliderController::class,'edit'])->name('edit.slider')->middleware('auth');
  Route::get('delete/slider/{id}',[SliderController::class,'delete'])->name('delete.slider')->middleware('auth');
  Route::post('update/slider/{id}',[SliderController::class,'update'])->name('update.slider')->middleware('auth');

   //Facilities route
  Route::get('all/facilitie',[FacilitiController::class,'all'])->name('all.facilitie')->middleware('auth');
  Route::get('add/facilitie',[FacilitiController::class,'add'])->name('add.facilitie')->middleware('auth');
  Route::post('store/facilitie',[FacilitiController::class,'store'])->name('store.facilitie')->middleware('auth');
  Route::get('edit/facilitie/{id}',[FacilitiController::class,'edit'])->name('edit.facilitie')->middleware('auth');
  Route::get('delete/facilitie/{id}',[FacilitiController::class,'delete'])->name('delete.facilitie')->middleware('auth');
  Route::post('update/facilitie/{id}',[FacilitiController::class,'update'])->name('update.facilitie')->middleware('auth');

   //work category route
  Route::get('all/work/category',[WorkCategoryController::class,'all'])->name('all.work.category')->middleware('auth');
  Route::get('add/work/category',[WorkCategoryController::class,'add'])->name('add.work.category')->middleware('auth');
  Route::post('store/work/category',[WorkCategoryController::class,'store'])->name('store.work.category')->middleware('auth');
  Route::get('edit/work/category/{id}',[WorkCategoryController::class,'edit'])->name('edit.work.category')->middleware('auth');
  Route::get('delete/work/category/{id}',[WorkCategoryController::class,'delete'])->name('delete.work.category')->middleware('auth');
  Route::post('update/work/category/{id}',[WorkCategoryController::class,'update'])->name('update.work.category')->middleware('auth');

     //work  route
  Route::get('all/work',[WorkController::class,'all'])->name('all.work')->middleware('auth');
  Route::get('add/work',[WorkController::class,'add'])->name('add.work')->middleware('auth');
  Route::post('store/work',[WorkController::class,'store'])->name('store.work')->middleware('auth');
  Route::get('edit/work/{id}',[WorkController::class,'edit'])->name('edit.work')->middleware('auth');
  Route::get('delete/work/{id}',[WorkController::class,'delete'])->name('delete.work')->middleware('auth');
  Route::post('update/work/{id}',[WorkController::class,'update'])->name('update.work')->middleware('auth');

     //team  route
  Route::get('all/team',[TeamController::class,'all'])->name('all.team')->middleware('auth');
  Route::get('add/team',[TeamController::class,'add'])->name('add.team')->middleware('auth');
  Route::post('store/team',[TeamController::class,'store'])->name('store.team')->middleware('auth');
  Route::get('edit/team/{id}',[TeamController::class,'edit'])->name('edit.team')->middleware('auth');
  Route::get('delete/team/{id}',[TeamController::class,'delete'])->name('delete.team')->middleware('auth');
  Route::post('update/team/{id}',[TeamController::class,'update'])->name('update.team')->middleware('auth');
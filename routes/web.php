<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FacilitiController;
use App\Http\Controllers\Admin\WorkCategoryController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ClientCategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseSubCategoryController;

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

       //review  route
  Route::get('all/review',[ReviewController::class,'all'])->name('all.review')->middleware('auth');
  Route::get('add/review',[ReviewController::class,'add'])->name('add.review')->middleware('auth');
  Route::post('store/review',[ReviewController::class,'store'])->name('store.review')->middleware('auth');
  Route::get('edit/review/{id}',[ReviewController::class,'edit'])->name('edit.review')->middleware('auth');
  Route::get('delete/review/{id}',[ReviewController::class,'delete'])->name('delete.review')->middleware('auth');
  Route::post('update/review/{id}',[ReviewController::class,'update'])->name('update.review')->middleware('auth');

         //clientcategory  route
  Route::get('all/clientcategory',[ClientCategoryController::class,'all'])->name('all.clientcategory')->middleware('auth');
  Route::get('add/clientcategory',[ClientCategoryController::class,'add'])->name('add.clientcategory')->middleware('auth');
  Route::post('store/clientcategory',[ClientCategoryController::class,'store'])->name('store.clientcategory')->middleware('auth');
  Route::get('edit/clientcategory/{id}',[ClientCategoryController::class,'edit'])->name('edit.clientcategory')->middleware('auth');
  Route::get('delete/clientcategory/{id}',[ClientCategoryController::class,'delete'])->name('delete.clientcategory')->middleware('auth');
  Route::post('update/clientcategory/{id}',[ClientCategoryController::class,'update'])->name('update.clientcategory')->middleware('auth');

         //client  route
  Route::get('all/client',[ClientController::class,'all'])->name('all.client')->middleware('auth');
  Route::get('add/client',[ClientController::class,'add'])->name('add.client')->middleware('auth');
  Route::post('store/client',[ClientController::class,'store'])->name('store.client')->middleware('auth');
  Route::get('edit/client/{id}',[ClientController::class,'edit'])->name('edit.client')->middleware('auth');
  Route::get('delete/client/{id}',[ClientController::class,'delete'])->name('delete.client')->middleware('auth');
  Route::post('update/client/{id}',[ClientController::class,'update'])->name('update.client')->middleware('auth');


//category  route
  Route::get('all/category',[CategoryController::class,'all'])->name('all.category')->middleware('auth');
  Route::get('add/category',[CategoryController::class,'add'])->name('add.category')->middleware('auth');
  Route::post('store/category',[CategoryController::class,'store'])->name('store.category')->middleware('auth');
  Route::get('edit/category/{id}',[CategoryController::class,'edit'])->name('edit.category')->middleware('auth');
  Route::get('delete/category/{id}',[CategoryController::class,'delete'])->name('delete.category')->middleware('auth');
  Route::post('update/category/{id}',[CategoryController::class,'update'])->name('update.category')->middleware('auth');


//subcategory  route
  Route::get('all/subcategory',[SubCategoryController::class,'all'])->name('all.subcategory')->middleware('auth');
  Route::get('add/subcategory',[SubCategoryController::class,'add'])->name('add.subcategory')->middleware('auth');
  Route::post('store/subcategory',[SubCategoryController::class,'store'])->name('store.subcategory')->middleware('auth');
  Route::get('edit/subcategory/{id}',[SubCategoryController::class,'edit'])->name('edit.subcategory')->middleware('auth');
  Route::get('delete/subcategory/{id}',[SubCategoryController::class,'delete'])->name('delete.subcategory')->middleware('auth');
  Route::post('update/subcategory/{id}',[SubCategoryController::class,'update'])->name('update.subcategory')->middleware('auth');

  //service  route
  Route::get('all/service',[ServiceController::class,'all'])->name('all.service')->middleware('auth');
  Route::get('add/service',[ServiceController::class,'add'])->name('add.service')->middleware('auth');
  Route::post('store/service',[ServiceController::class,'store'])->name('store.service')->middleware('auth');
  Route::get('edit/service/{id}',[ServiceController::class,'edit'])->name('edit.service')->middleware('auth');
  Route::get('delete/service/{id}',[ServiceController::class,'delete'])->name('delete.service')->middleware('auth');
  Route::post('update/service/{id}',[ServiceController::class,'update'])->name('update.service')->middleware('auth');
  Route::get('get/category/{category_id}', [ServiceController::class, 'GetCategory']);


    //about  route
  Route::get('all/about',[AboutController::class,'all'])->name('all.about')->middleware('auth');
  Route::get('add/about',[AboutController::class,'add'])->name('add.about')->middleware('auth');
  Route::post('store/about',[AboutController::class,'store'])->name('store.about')->middleware('auth');
  Route::get('edit/about/{id}',[AboutController::class,'edit'])->name('edit.about')->middleware('auth');
  Route::get('delete/about/{id}',[AboutController::class,'delete'])->name('delete.about')->middleware('auth');
  Route::post('update/about/{id}',[AboutController::class,'update'])->name('update.about')->middleware('auth');
 


    //blogcategory  route
  Route::get('all/blogcategory',[BlogCategoryController::class,'all'])->name('all.blogcategory')->middleware('auth');
  Route::get('add/blogcategory',[BlogCategoryController::class,'add'])->name('add.blogcategory')->middleware('auth');
  Route::post('store/blogcategory',[BlogCategoryController::class,'store'])->name('store.blogcategory')->middleware('auth');
  Route::get('edit/blogcategory/{id}',[BlogCategoryController::class,'edit'])->name('edit.blogcategory')->middleware('auth');
  Route::get('delete/blogcategory/{id}',[BlogCategoryController::class,'delete'])->name('delete.blogcategory')->middleware('auth');
  Route::post('update/blogcategory/{id}',[BlogCategoryController::class,'update'])->name('update.blogcategory')->middleware('auth');
 

    //blog  route
  Route::get('all/blog',[BlogController::class,'all'])->name('all.blog')->middleware('auth');
  Route::get('add/blog',[BlogController::class,'add'])->name('add.blog')->middleware('auth');
  Route::post('store/blog',[BlogController::class,'store'])->name('store.blog')->middleware('auth');
  Route::get('edit/blog/{id}',[BlogController::class,'edit'])->name('edit.blog')->middleware('auth');
  Route::get('delete/blog/{id}',[BlogController::class,'delete'])->name('delete.blog')->middleware('auth');
  Route::post('update/blog/{id}',[BlogController::class,'update'])->name('update.blog')->middleware('auth');


      //coursecategory  route
  Route::get('all/coursecategory',[CourseCategoryController::class,'all'])->name('all.coursecategory')->middleware('auth');
  Route::get('add/coursecategory',[CourseCategoryController::class,'add'])->name('add.coursecategory')->middleware('auth');
  Route::post('store/coursecategory',[CourseCategoryController::class,'store'])->name('store.coursecategory')->middleware('auth');
  Route::get('edit/coursecategory/{id}',[CourseCategoryController::class,'edit'])->name('edit.coursecategory')->middleware('auth');
  Route::get('delete/coursecategory/{id}',[CourseCategoryController::class,'delete'])->name('delete.coursecategory')->middleware('auth');
  Route::post('update/coursecategory/{id}',[CourseCategoryController::class,'update'])->name('update.coursecategory')->middleware('auth');

        //coursesubcategory  route
  Route::get('all/coursesubcategory',[CourseSubCategoryController::class,'all'])->name('all.coursesubcategory')->middleware('auth');
  Route::get('add/coursesubcategory',[CourseSubCategoryController::class,'add'])->name('add.coursesubcategory')->middleware('auth');
  Route::post('store/coursesubcategory',[CourseSubCategoryController::class,'store'])->name('store.coursesubcategory')->middleware('auth');
  Route::get('edit/coursesubcategory/{id}',[CourseSubCategoryController::class,'edit'])->name('edit.coursesubcategory')->middleware('auth');
  Route::get('delete/coursesubcategory/{id}',[CourseSubCategoryController::class,'delete'])->name('delete.coursesubcategory')->middleware('auth');
  Route::post('update/coursesubcategory/{id}',[CourseSubCategoryController::class,'update'])->name('update.coursesubcategory')->middleware('auth');
 


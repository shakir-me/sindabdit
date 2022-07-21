<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Support\Str;
use Image;
class CourseCategoryController extends Controller
{
    public function all()
       {
        $course=CourseCategory::all();
        return view('admin.course.category.index',compact('course'));
      }
            public function add()
            {

                
                return view('admin.course.category.add');
            }

            public function store(Request $request)
            {
                
                  $coursecategory = new CourseCategory();
                  $coursecategory->name=$request->name;
                  $coursecategory->slug =Str::slug($request->name);

                       if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/coursecategory/' .$img);
                   Image::make($image)->save($location);
                   $coursecategory->image = $img;
                  }
       

                  $coursecategory->save();
                    if ($coursecategory) {           
                    $notification=array(
                      'messege'=>'CourseCategory Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $course= CourseCategory::find($id);
                 return view('admin.course.category.edit',compact('course'));

            }


            public function update(Request $request,$id)
            { 

             $coursecategory= CourseCategory::find($id);
             $coursecategory->name=$request->name;
             $coursecategory->slug =Str::slug($request->name);
                  if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/coursecategory/' .$img);
              Image::make($image)->save($location);
              $coursecategory->image = $img;
             }
             


          $coursecategory->save();
            if ($coursecategory) {           
            $notification=array(
              'messege'=>'CourseCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.coursecategory')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = CourseCategory::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'CourseCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

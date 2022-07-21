<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseSubcategory;
use Illuminate\Support\Str;
class CourseSubCategoryController extends Controller
{
    public function all()
       {
        $subcategory=CourseSubcategory::all();
        return view('admin.course.subcategory.index',compact('subcategory'));
      }
            public function add()
            {

                
                return view('admin.course.subcategory.add');
            }

            public function store(Request $request)
            {
                
                  $subcategory = new CourseSubcategory();
                  $subcategory->name=$request->name;
                  $subcategory->course_category_id=$request->course_category_id;
                  $subcategory->slug =Str::slug($request->name);
                  $subcategory->save();
                    if ($subcategory) {           
                    $notification=array(
                      'messege'=>'CourseSubcategory Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $subcategory= CourseSubcategory::find($id);
                 return view('admin.course.subcategory.edit',compact('subcategory'));

            }


            public function update(Request $request,$id)
            { 

             $subcategory= CourseSubcategory::find($id);
             $subcategory->name=$request->name;
             $subcategory->course_category_id=$request->course_category_id;
             $subcategory->slug =Str::slug($request->name);


           $subcategory->save();
            if ($subcategory) {           
            $notification=array(
              'messege'=>'SubCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.coursesubcategory')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = SubCategory::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'SubCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

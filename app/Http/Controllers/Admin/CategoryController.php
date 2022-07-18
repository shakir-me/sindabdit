<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Image;
class CategoryController extends Controller
{
    public function all()
       {
        $category=Category::all();
        return view('admin.service.category.index',compact('category'));
      }
            public function add()
            {

                
                return view('admin.service.category.add');
            }

            public function store(Request $request)
            {
                
                  $category = new Category();
                  $category->name=$request->name;
                  $category->slug =Str::slug($request->name);

                       if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/category/' .$img);
                   Image::make($image)->save($location);
                   $category->image = $img;
                  }
       

                  $category->save();
                    if ($category) {           
                    $notification=array(
                      'messege'=>'Category Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $category= Category::find($id);
                 return view('admin.service.category.edit',compact('category'));

            }


            public function update(Request $request,$id)
            { 

             $category= Category::find($id);
             $category->name=$request->name;
             $category->slug =Str::slug($request->name);
                  if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/category/' .$img);
              Image::make($image)->save($location);
              $category->image = $img;
             }
             


          $category->save();
            if ($category) {           
            $notification=array(
              'messege'=>'Category Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.category')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = Category::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Category Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

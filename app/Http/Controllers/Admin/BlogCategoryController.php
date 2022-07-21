<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
class BlogCategoryController extends Controller
{
    public function all()
       {
        $blog_category=BlogCategory::all();
        return view('admin.blog.category.index',compact('blog_category'));
      }
            public function add()
       {

                
                return view('admin.blog.category.add');
            }

            public function store(Request $request)
            {
                
                  $blogcategory = new BlogCategory();
                  $blogcategory->name=$request->name;
                  $blogcategory->slug =Str::slug($request->name);
                  $blogcategory->save();
                    if ($blogcategory) {           
                    $notification=array(
                      'messege'=>'BlogCategory Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $blogcategory= BlogCategory::find($id);
                 return view('admin.blog.category.edit',compact('blogcategory'));

            }


            public function update(Request $request,$id)
            { 

             $blogcategory= BlogCategory::find($id);
             $blogcategory->name=$request->name;
             $blogcategory->slug =Str::slug($request->name);


            $blogcategory->save();
            if ($blogcategory) {           
            $notification=array(
              'messege'=>'BlogCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.blogcategory')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = BlogCategory::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'BlogCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

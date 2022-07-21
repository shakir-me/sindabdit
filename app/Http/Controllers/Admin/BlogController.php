<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Image;
class BlogController extends Controller
{
        public function all()
        {
            $blog=Blog::all();
            return view('admin.blog.index',compact('blog'));
        }
                public function add()
                {

                    
                    return view('admin.blog.add');
                }

                public function store(Request $request)
                {
                    
                      $blog = new Blog();
                      $blog->title=$request->title;
                      $blog->blogcategory_id=$request->blogcategory_id;
                      $blog->short=$request->short;
                      $blog->desc=$request->desc;
                      $blog->slider_blog=$request->slider_blog;
                      $blog->slug =Str::slug($request->title);
              
                      if ($request->image > 0) {
                       $image = $request->file('image');
                       $img = time() . '.'. $image->getClientOriginalExtension();
                       $location = public_path('backend/blog/' .$img);
                       Image::make($image)->save($location);
                       $blog->image = $img;
                      }
           


                       



                      $blog->save();
                        if ($blog) {           
                        $notification=array(
                          'messege'=>'Work Added Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);
                   }
                }

                public function edit($id)
                {
                     $blog= Blog::find($id);
                     return view('admin.blog.edit',compact('blog'));

                }


                public function update(Request $request,$id)
                { 

                 $blog= Blog::find($id);
                $blog->title=$request->title;
                $blog->blogcategory_id=$request->blogcategory_id;
                $blog->short=$request->short;
                $blog->desc=$request->desc;
                $blog->slider_blog=$request->slider_blog;
                $blog->slug =Str::slug($request->title);

                 if ($request->image > 0) {
                  $image = $request->file('image');
                  $img = time() . '.'. $image->getClientOriginalExtension();
                  $location = public_path('backend/blog/' .$img);
                  Image::make($image)->save($location);
                  $blog->image = $img;
                 }

                  


                      $blog->save();
                        if ($blog) {           
                        $notification=array(
                          'messege'=>'Blog Update Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->route('all.blog')->with($notification);
                   }
                }

                public function delete($id)
                {
                  $delete = Blog::find($id);
                  $delete->delete();
                   $notification=array(
                        'messege'=>'Blog Deleted Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
                }
}

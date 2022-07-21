<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;
class AboutController extends Controller
{
    public function all()
       {
        $about=About::all();
        return view('admin.about.index',compact('about'));
      }
            public function add()
            {

                
                return view('admin.about.add');
            }

            public function store(Request $request)
            {
                
                  $about = new About();
                  $about->title=$request->title;
                  $about->desc=$request->desc;


                       if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/about/' .$img);
                   Image::make($image)->save($location);
                   $about->image = $img;
                  }
       

                  $about->save();
                    if ($about) {           
                    $notification=array(
                      'messege'=>'About Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $about= About::find($id);
                 return view('admin.about.edit',compact('about'));

            }


            public function update(Request $request,$id)
            { 

             $about= About::find($id);
             $about->title=$request->title;
             $about->desc=$request->desc;
                  if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/about/' .$img);
              Image::make($image)->save($location);
              $about->image = $img;
             }
             


          $about->save();
            if ($about) {           
            $notification=array(
              'messege'=>'About Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.about')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = About::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'About Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

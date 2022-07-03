<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
class SliderController extends Controller
{
    public function all()
        	{
        		$slider=Slider::all();
        		return view('admin.slider.index',compact('slider'));
        	}
            public function add()
            {

            	
            	return view('admin.slider.add');
            }

            public function store(Request $request)
            {
            	
                  $slider = new Slider();
                  $slider->title=$request->title;
                  $slider->desc=$request->desc;
                  $slider->link=$request->link;
                  $slider->video_link=$request->video_link;
                  if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/slider/' .$img);
                   Image::make($image)->save($location);
                   $slider->image = $img;
                  }
       


                   



                  $slider->save();
                    if ($slider) {           
                    $notification=array(
                      'messege'=>'Slider Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $slider= Slider::find($id);
                 return view('admin.slider.edit',compact('slider'));

            }


            public function update(Request $request,$id)
            { 

             $slider= Slider::find($id);
             $slider->title=$request->title;
             $slider->desc=$request->desc;
             $slider->link=$request->link;
             $slider->video_link=$request->video_link;

             if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/slider/' .$img);
              Image::make($image)->save($location);
              $slider->image = $img;
             }

              


                  $slider->save();
                    if ($slider) {           
                    $notification=array(
                      'messege'=>'Slider Update Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('all.slider')->with($notification);
               }
            }

            public function delete($id)
            {
              $delete = Slider::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Slider Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

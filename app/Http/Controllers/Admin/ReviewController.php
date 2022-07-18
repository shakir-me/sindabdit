<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Image;
class ReviewController extends Controller
{
    public function all()
            {
                $review=Review::all();
                return view('admin.review.index',compact('review'));
            }
            public function add()
            {

                
                return view('admin.review.add');
            }

            public function store(Request $request)
            {
                
                  $review = new Review();
                  $review->name=$request->name;
                  $review->start=$request->start;
                  $review->designation=$request->designation;
                  $review->desc=$request->desc;
                  if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/review/' .$img);
                   Image::make($image)->save($location);
                   $review->image = $img;
                  }
       


                   



                  $review->save();
                    if ($review) {           
                    $notification=array(
                      'messege'=>'Client Review Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $review= Review::find($id);
                 return view('admin.review.edit',compact('review'));

            }


            public function update(Request $request,$id)
            { 

            $review= Review::find($id);
            $review->name=$request->name;
            $review->start=$request->start;
            $review->designation=$request->designation;
             $review->desc=$request->desc;

             if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/review/' .$img);
              Image::make($image)->save($location);
              $review->image = $img;
             }

              


                  $review->save();
                    if ($review) {           
                    $notification=array(
                      'messege'=>'CLient Review Update Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('all.review')->with($notification);
               }
            }

            public function delete($id)
            {
              $delete = Review::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Review Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faciliti;
use Image;
class FacilitiController extends Controller
{
    public function all()
        	{
        		$facilitie=Faciliti::all();
        		return view('admin.facilitie.index',compact('facilitie'));
        	}
            public function add()
            {

            	
            	return view('admin.facilitie.add');
            }

            public function store(Request $request)
            {
            	
                  $facilitie = new Faciliti();
                  $facilitie->title=$request->title;
                  $facilitie->desc=$request->desc;

                   if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/facilitie/' .$img);
                   Image::make($image)->save($location);
                   $facilitie->image = $img;
                  }
       
                   



                  $facilitie->save();
                    if ($facilitie) {           
                    $notification=array(
                      'messege'=>'Faciliti Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $facilitie= Faciliti::find($id);
                 return view('admin.facilitie.edit',compact('facilitie'));

            }


            public function update(Request $request,$id)
            { 

             $facilitie= Faciliti::find($id);
             $facilitie->title=$request->title;
             $facilitie->desc=$request->desc;

             if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/facilitie/' .$img);
              Image::make($image)->save($location);
              $facilitie->image = $img;
             }

              


                  $facilitie->save();
                    if ($facilitie) {           
                    $notification=array(
                      'messege'=>'Faciliti Update Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('all.facilitie')->with($notification);
               }
            }

            public function delete($id)
            {
              $delete = Faciliti::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Faciliti Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

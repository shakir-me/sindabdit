<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Image;
class WorkController extends Controller
{
    public function all()
	{
		$work=Work::all();
		return view('admin.work.index',compact('work'));
	}
            public function add()
            {

            	
            	return view('admin.work.add');
            }

            public function store(Request $request)
            {
            	
                  $work = new Work();
                  $work->title=$request->title;
                  $work->work_category_id=$request->work_category_id;
                  $work->desc=$request->desc;
                  $work->link=$request->link;
          
                  if ($request->image > 0) {
                   $image = $request->file('image');
                   $img = time() . '.'. $image->getClientOriginalExtension();
                   $location = public_path('backend/work/' .$img);
                   Image::make($image)->save($location);
                   $work->image = $img;
                  }
       


                   



                  $work->save();
                    if ($work) {           
                    $notification=array(
                      'messege'=>'Work Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $work= Work::find($id);
                 return view('admin.work.edit',compact('work'));

            }


            public function update(Request $request,$id)
            { 

             $work= Work::find($id);
             $work->title=$request->title;
             $work->desc=$request->desc;
             $work->link=$request->link;
             $work->work_category_id=$request->work_category_id;

             if ($request->image > 0) {
              $image = $request->file('image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('backend/work/' .$img);
              Image::make($image)->save($location);
              $work->image = $img;
             }

              


                  $work->save();
                    if ($work) {           
                    $notification=array(
                      'messege'=>'Work Update Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->route('all.work')->with($notification);
               }
            }

            public function delete($id)
            {
              $delete = Work::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Work Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
}

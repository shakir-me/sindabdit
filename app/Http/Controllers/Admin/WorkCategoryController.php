<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkCategory;
use Illuminate\Support\Str;
class WorkCategoryController extends Controller
{
    public function all()
       {
        $work_category=WorkCategory::all();
        return view('admin.work.workcategory.index',compact('work_category'));
      }
            public function add()
       {

            	
            	return view('admin.work.workcategory.add');
            }

            public function store(Request $request)
            {
            	
                  $workcategory = new WorkCategory();
                  $workcategory->title=$request->title;
                  $workcategory->slug =Str::slug($request->title);
                  $workcategory->save();
                    if ($workcategory) {           
                    $notification=array(
                      'messege'=>'WorkCategory Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $workcategory= WorkCategory::find($id);
                 return view('admin.work.workcategory.edit',compact('workcategory'));

            }


            public function update(Request $request,$id)
            { 

             $workcategory= WorkCategory::find($id);
             $workcategory->title=$request->title;
             $workcategory->slug =Str::slug($request->title);


          $workcategory->save();
            if ($workcategory) {           
            $notification=array(
              'messege'=>'WorkCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.work.category')->with($notification);
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

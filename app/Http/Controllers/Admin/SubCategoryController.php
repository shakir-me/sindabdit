<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function all()
       {
        $subcategory=SubCategory::all();
        return view('admin.service.subcategory.index',compact('subcategory'));
      }
            public function add()
            {

                
                return view('admin.service.subcategory.add');
            }

            public function store(Request $request)
            {
                
                  $subcategory = new SubCategory();
                  $subcategory->name=$request->name;
                  $subcategory->category_id=$request->category_id;
                  $subcategory->slug =Str::slug($request->name);
                  $subcategory->save();
                    if ($subcategory) {           
                    $notification=array(
                      'messege'=>'SubCategory Added Successfully',
                      'alert-type'=>'success'
                       );
                     return Redirect()->back()->with($notification);
               }
            }

            public function edit($id)
            {
                 $subcategory= SubCategory::find($id);
                 return view('admin.service.subcategory.edit',compact('subcategory'));

            }


            public function update(Request $request,$id)
            { 

             $subcategory= SubCategory::find($id);
             $subcategory->name=$request->name;
             $subcategory->category_id=$request->category_id;
             $subcategory->slug =Str::slug($request->name);


           $subcategory->save();
            if ($subcategory) {           
            $notification=array(
              'messege'=>'SubCategory Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.subcategory')->with($notification);
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

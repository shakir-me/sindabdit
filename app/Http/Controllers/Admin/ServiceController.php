<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Service;
use Illuminate\Support\Str;
use Image;
use DB;
class ServiceController extends Controller
{
    public function all()
   {
   $service=Service::all();
   return view('admin.service..service.index',compact('service'));
  }
    public function add()
    {

        
        return view('admin.service.service.add');
    }

public function store(Request $request)
{
    
      $service = new Service();
      $service->title=$request->title;
      $service->category_id=$request->category_id;
      $service->subcategory_id=$request->subcategory_id;
      $service->short=$request->short;
      $service->desc=$request->desc;
      $service->link=$request->link;
      $service->slug =Str::slug($request->title);
      if ($request->image > 0) {
       $image = $request->file('image');
       $img = time() . '.'. $image->getClientOriginalExtension();
       $location = public_path('backend/service/' .$img);
       Image::make($image)->save($location);
       $service->image = $img;
      }
      
      $service->save();
        if ($service) {           
        $notification=array(
          'messege'=>'Service  Added Successfully',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
   }
}

            public function edit($id)
            {
                 $service= Service::find($id);
                 return view('admin.service.service.edit',compact('service'));

            }


            public function update(Request $request,$id)
            { 

            $service= Service::find($id);
           $service->title=$request->title;
           $service->category_id=$request->category_id;
           $service->subcategory_id=$request->subcategory_id;
           $service->short=$request->short;
           $service->desc=$request->desc;
           $service->link=$request->link;
           $service->slug =Str::slug($request->title);
          if ($request->image > 0) {
           $image = $request->file('image');
           $img = time() . '.'. $image->getClientOriginalExtension();
           $location = public_path('backend/service/' .$img);
           Image::make($image)->save($location);
           $service->image = $img;
          }
           $service->save();
            if ($service) {           
            $notification=array(
              'messege'=>'CLient Service Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.service')->with($notification);
       }
            }

            public function delete($id)
            {
              $delete = ClientCategory::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'ClientCategory Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }


            public function GetCategory($category_id){
                $cat=DB::table('sub_categories')->where("category_id",$category_id)->get();
                    return json_decode($cat);
            }
}
